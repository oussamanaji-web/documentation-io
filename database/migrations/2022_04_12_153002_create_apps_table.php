<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppsTable extends Migration
{
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->id();

            $table->char('uuid',36);
            $table->bigInteger('saml_service_provider_id');
            $table->string('name');
            $table->string('slug');
            $table->string('type');
            $table->string('url')->nullable();
            $table->string('desk_url')->nullable();
            $table->text('description')->nullable();
            $table->string('logo')->nullable();
            $table->tinyInteger('is_active');
            $table->tinyInteger('is_visible');

            $table->timestamps();
            $table->timestamp('deleted_at');
        });

        Schema::create('documentation_sections', function (Blueprint $table) {
            $table->id();

            $table->foreignId('documentation_id')->constrained('documentations')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

            $table->string('type')->nullable();
            $table->text('title')->nullable();
            $table->text('content')->nullable();
            $table->string('parent',50)->nullable();
            $table->string('url')->nullable();
            $table->string('apiMethode')->nullable();
            $table->string('apiParamètre')->nullable();
            $table->string('apiName')->nullable();
            $table->text('apiDescription')->nullable();
            $table->string('casTitle')->nullable();
            $table->text('casDescription')->nullable();
            $table->string('frontTitle')->nullable();
            $table->text('frontDescription')->nullable();
            $table->longText('frontSourceCodeHtml')->nullable();
            $table->longText('frontSourceCodeJs')->nullable();
            $table->string('frontEdition')->nullable();
            $table->string('backTitle')->nullable();
            $table->text('backDescription')->nullable();
            $table->longText('backSourceCode')->nullable();


            $table->timestamps();
        });
        Schema::table('documentation_sections', function (Blueprint $table) {

            $table->foreignId('parent_id')->after('user_id')->constrained('documentation_sections')->onDelete('cascade');

        });
        Schema::create('app_tenant', function (Blueprint $table) {

            $table->foreignId('app_id')->constrained('apps')->onDelete('cascade');
            $table->foreignId('tenant_id')->constrained('tenants')->onDelete('cascade');

            $table->string('url')->nullable();
            $table->json('io_data')->nullable();

        });
        Schema::create('documentation_sections_apps', function (Blueprint $table) {

            $table->foreignId('type_id')->constrained('documentation_sections')->onDelete('cascade');
            $table->foreignId('app_id')->constrained('apps')->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('apps');
    }
}
