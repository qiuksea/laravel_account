<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
#composer dump-autoload -> after delete migration, use this cmd

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('staff_name'); //staff_name
            $table->string('staff_tel'); //staff_ext
            $table->string('staff_email'); //staff_email
            $table->boolean('is_over_10k')->default(0); //company_project_10k
            $table->string('who_credit_check'); //credit_check   

            $table->string('company_type'); //company_type 
            $table->boolean('is_student')->default(0); //student
            $table->string('student_reg_no');//student_reg_no          
            $table->boolean('is_subsidiary')->default(0);//subsidiary
            $table->string('subsidiary_info');//subsidiaryInformation

            $table->string('company_name');//company_name
            $table->string('company_address_1');//company_address_1
            $table->string('company_address_2');//company_address_2
            $table->string('company_address_3');//company_address_3
            $table->string('company_town');//company_town            
            $table->string('company_postcode');//company_post
            $table->string('company_reg_number');//company_reg_no
            $table->string('company_telephone');//company_telephone
            $table->string('company_fax');//company_fax
            $table->string('company_email');//company_email
            $table->string('company_contact_name');//company_contact_name
            $table->boolean('company_is_eu');//company_part_eu
            $table->integer('company_country_id'); // 'company_vat_eu' - for eu contry; company_country -> for non-eu
            $table->string('company_vat_reg_no');//company_vat_reg_no
            $table->boolean('is_charity_or_eligible_body'); // -> 'company_pay_vat'-> 'body'
            $table->string('company_eligibility'); //company_eligibility
            $table->string('company_eligibility_other'); //company_eligibility_other
            $table->text('company_notes'); //company_comments
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
        Schema::dropIfExists('accounts');
    }
}
