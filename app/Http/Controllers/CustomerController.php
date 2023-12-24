<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobil;
use App\Models\Sewa;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function booking($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('Customer.dataDiri', compact('mobil'));
    }

    public function addDataDiri(Request $request)
    {
        $request->validate([
            'nama_customer' => 'required|max:255',
            'no_telp' => 'required|numeric',
            'ktp' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email' => 'required',
            'alamat' => 'required|max:255',
            'nama_orang_terdekat' => 'required|max:255',
            'email_darurat' => 'required|max:255',
            'no_telp_darurat' => 'required|numeric',
            'tanggal_sewa' => 'required',
            'tanggal_pengembalian' => 'required',
            'lokasi_pengambilan' => 'required|string',
            'id_mobil' => 'required',
        ]);

        $image = $request->file('ktp');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/img/ktp'), $imageName);

        // $customer = new Customer([
        //     'nama_customer' => $request->nama_customer,
        //     'no_telp' => $request->no_telp,
        //     'ktp' => $imageName,
        //     'email' => $request->email,
        //     'alamat' => $request->alamat,
        //     'nama_orang_terdekat' => $request->nama_orang_terdekat,
        //     'email_darurat' => $request->email_darurat,
        //     'no_telp_darurat' => $request->no_telp_darurat,

        // ]);
        // $customer->save();

        // $idCustomer = $customer->id_customer;

        // $sewa = new Sewa([
        //     'tanggal_sewa' => $request->tanggal_sewa,
        //     'tanggal_pengembalian' => $request->tanggal_pengembalian,
        //     'lokasi_pengambilan' => $request->lokasi_pengambilan,
        //     'id_customer' => $idCustomer,
        //     'id_mobil' => $request->id_mobil,
        // ]);
        // $sewa->save();

        $addDataDiri = [
            'nama_customer' => $request->nama_customer,
            'no_telp' => $request->no_telp,
            'ktp' => $imageName,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'nama_orang_terdekat' => $request->nama_orang_terdekat,
            'email_darurat' => $request->email_darurat,
            'no_telp_darurat' => $request->no_telp_darurat,
        ];
        $customer = Customer::create($addDataDiri);
        $idCustomer = $customer->id_customer;
        
        $addDataSewa = [
            'tanggal_sewa' => $request->tanggal_sewa,
            'tanggal_pengembalian' => $request->tanggal_pengembalian,
            'lokasi_pengambilan' => $request->lokasi_pengambilan,
            'id_customer' => $idCustomer,
            'id_mobil' => $request->id_mobil,
        ];
        
        Sewa::create($addDataSewa);






        return view('Customer.transaksiPembayaran')->with('success', 'Data Customer Berhasil Dibuat.');
    }

    public function dataCustomer()
    {
        return view('Admin.DataCustomer.datacustomer');
    }
}
