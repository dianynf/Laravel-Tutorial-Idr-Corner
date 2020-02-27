<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->text('alamat');
            $table->string('tlp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}


// catatan compile terminal
// php artisan make:controller PageController = cara membuat controller
//php artisan make:model Contact -m  = membuat Model dan migrate modelnya dgn -m
// php artisan migrate  = perintah untuk update database yg kita buat dari codingan

//membuat factory
//fungsi factory dan suder adalah untuk membuat data secara banyak untuk mencoba aplikasi kita cuama untuk mengembangkan aplikasi tidak perlu data2
//php artisan make:factory ContactFactory
// php artisan make:seed ContactSeeder


// dan perintah update datanya
// php artisan db:seed

// membuat create
// php artisan make:request TambahContactRequest



// catatan compile terminal
//  php artisan make:controller AlumniController --resource = cara membuat controller
// php artisan make:model Contact -m  = membuat Model dan migrate modelnya dgn -m
// php artisan migrate  = perintah untuk update database yg kita buat dari codingan

//membuat factory
//fungsi factory dan suder adalah untuk membuat data secara banyak untuk mencoba aplikasi kita cuama untuk mengembangkan aplikasi tidak perlu data2
//php artisan make:factory ContactFactory
// php artisan make:seed ContactSeeder


// dan perintah update datanya
// php artisan db:seed

// membuat create
// php artisan make:request ContactRequest

//untuk link dari storege ke public karena folder storage tdk boleh di akses sembarangan untuk image(file) dan edit file .env
// php artisan storage:link

//php artisan route:list
// untuk refresh database
//php artisan migrate:refresh

//untuk melihat database jadi tidak perlu liat dari phpmysqmin dan langsng bisa liat errornya dimana
//php artisan tinker
//App\Kategori::all()  ->perintah untuk liat database menggnakan query

// php artisan make:controller AlumniController --resource
// php artisan make:request AlumniRequest
// php artisan make:model Alumni -m
// php artisan migrate
