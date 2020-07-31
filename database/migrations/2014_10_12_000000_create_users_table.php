<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            // 基本的にGoogle OAuth認証にするためpasswordをnull許容に変更
            $table->string('password')->nullable();;
            // Google OAuth parameter
            $table->string('uid')->nullable();
            $table->string('provider')->nullable();
            // role・employee table作成後 外部キーを追加する

            $table->rememberToken();
            $table->timestamps();
            // 複合ユニークキー
            $table->unique(['uid', 'provider']);
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
