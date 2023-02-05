<?php

namespace SalimHosen\Core\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use SalimHosen\Core\Models\Contact;
use SalimHosen\Core\Models\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = Company::create([
            "company_id" => 1,
            "name" => "The Construction Platform",
            "is_active" => true,
            "is_approved" => true,
            "slug" => Str::slug("The Construction Platform")
        ]);

        Contact::create([
            "name" => $company->name,
            "contact_type" => 0,
            "company_id" => $company->id,
            "email" => "info@tcp.com",
            "phone" => "+1053593534",
            "country_id" => 1,
            "state_id" => 1,
            "city" => "New Jersy",
            "zip_code" => 1263,
            "address" => "New Jersy, USA",
            "is_default_contact" => true,
        ]);

        User::find(1)->companies()->sync([$company->id]);
    }
}
