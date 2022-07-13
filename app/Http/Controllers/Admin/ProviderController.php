<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProviderController extends Controller
{
    public function index()
    {
        $data = [
            'path'      => '/adm-provider',
            'provider'  => $this->provider->where('active', 1)->first(),
        ];

        return view('admin.provider', $data);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        
        if ($input['segment'] == 'company') {
            $data = [
                'company_name'          => $input['company_name'],
                'company_birth_place'   => $input['company_birth_place'],
                'company_birth_date'    => date('Y-m-d', strtotime(str_replace('/', '-', $input['company_birth_date']))),
                'company_email'         => $input['company_email'],
                'company_phone_number'  => $input['company_phone_number'],
                'company_address'       => $input['company_address'],
                'company_description'   => $input['company_description'],
                'company_logo_text'     => $input['old_company_logo_text'],
                'company_logo'          => $input['old_company_logo'],
            ];

            if ($request->company_logo) {
                if ($request->old_company_logo) File::delete(public_path().$request->old_company_logo);
                $file = $request->file('company_logo');
                // $extension = $request->company_logo->getClientOriginalExtension();  //Get Image Extension
                // $fileName =  strtotime(now()).'_'.$request->nis.'_'.$request->full_name.'.'.$extension;  //Concatenate both to get FileName (eg: file.jpg)
                $file->move(public_path(), '/favicon.png');  

                $data['company_logo'] = '/favicon.png'; 
            }
            if ($request->company_logo_text) {
                if ($request->old_company_logo_text) File::delete(public_path().$request->old_company_logo_text);
                $file = $request->file('company_logo_text');
                // $extension = $request->company_logo_text->getClientOriginalExtension();  //Get Image Extension
                // $fileName =  strtotime(now()).'_'.$request->nis.'_'.$request->full_name.'.'.$extension;  //Concatenate both to get FileName (eg: file.jpg)
                $file->move(public_path(), '/images/logo.jpg');  

                $data['company_logo_text'] = '/images/logo.jpg'; 
            }
        } elseif ($input['segment'] == 'owner') {
            $data = [
                'owner_name'          => $input['owner_name'],
                'owner_birth_place'   => $input['owner_birth_place'],
                'owner_birth_date'    => date('Y-m-d', strtotime(str_replace('/', '-', $input['owner_birth_date']))),
                'owner_email'         => $input['owner_email'],
                'owner_phone_number'  => $input['owner_phone_number'],
                'owner_address'       => $input['owner_address'],
                'owner_photo'         => $input['old_owner_photo'],
            ];

            if ($request->owner_photo) {
                if ($request->old_owner_photo) File::delete(public_path().$request->old_owner_photo);
                $file = $request->file('owner_photo');
                $extension = $request->owner_photo->getClientOriginalExtension();  //Get Image Extension
                $fileName =  strtotime(now()).'_'.$request->owner_name.'.'.$extension;  //Concatenate both to get FileName (eg: file.jpg)
                $file->move(public_path().'/images/users/', $fileName);  

                $data['owner_photo'] = '/images/users/'.$fileName; 
            }
        } else {
            $data = [
                'company_facebook'      => $input['company_facebook'],
                'company_twitter'       => $input['company_twitter'],
                'company_instagram'     => $input['company_instagram'],
                'company_linkedin'      => $input['company_linkedin'],
            ];
        }

        $data += [
            'updated_by'        => 'Administrator',
            'updated_at'        => now(),
        ];

        $this->provider->where('id', $input['id'])->update($data);

        return redirect(url()->previous())->with('status', 'Profil Perusahaan berhasil diubah.');
    }
}
