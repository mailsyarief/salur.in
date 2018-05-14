<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //atribut Umum
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->char('role',1);
            $table->string('noktp')->nullable(true);
            $table->string('telepon')->nullable(true);
            $table->date('tgllahir')->nullable(true);

            $table->string('foto')->nullable(true);
            $table->string('berkas')->nullable(true);
            $table->string('alamat')->nullable(true);

            $table->rememberToken();
            $table->timestamps();

            //atribut Pekerja Only
            $table->string('P_status')->nullable(true);
            $table->string('P_domisili')->nullable(true);
            $table->string('P_kelahiran')->nullable(true);
            $table->text('P_pengalaman')->nullable(true);
            $table->string('P_keahlian')->nullable(true);
            $table->string('P_penyalur')->nullable(true);
            $table->char('P_ketersediaan',2)->nullable(true);

            
            //atribut Agen Only
            $table->string('A_website')->nullable(true);            
            $table->string('A_deskripsi')->nullable(true);


            $table->string('M_kerjasama')->nullable(true);


            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
