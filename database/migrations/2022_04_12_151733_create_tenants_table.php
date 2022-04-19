<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();

            $table->char('uuid',36);
            $table->string('display_name');
            $table->tinyInteger('is_active');
            $table->json('company_details')->nullable();

            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('last_tenant_id')->after('updated_at')->constrained('tenants')->onDelete('cascade');
        });
        Schema::create('tenant_user', function (Blueprint $table) {
            $table->id();

            $table->foreignId('tenant_id')->constrained('tenants')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tenants');
    }
}
