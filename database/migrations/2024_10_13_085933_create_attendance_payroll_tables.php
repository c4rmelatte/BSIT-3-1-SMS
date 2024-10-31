<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_class_attendance_checklist', function (Blueprint $table) {
            $table->text('id_number');
            $table->text('subject_id');
            $table->boolean('checklist')->default(false);
            $table->text('semester');
            $table->text('date');
            $table->text('term');
        });

        Schema::create('student_event_attendance_checklist', function (Blueprint $table) {
            $table->text('id_number');
            $table->text('event_id');
            $table->text('event_name');
            $table->text('event_description');
            $table->text('year_section');
            $table->text('date');
            $table->text('time');
            $table->boolean('checklist')->default(false);
        });

        Schema::create('employee_dtr', function (Blueprint $table) {
            $table->text('id_number');
            $table->text('month_year');
            $table->text('day');
            $table->text('time_in');
            $table->text('late');
            $table->text('time_out');
            $table->text('undertime');
            $table->text('overtime');
            $table->text('hours_worked');
        });

        Schema::create('employee_payroll', function (Blueprint $table) {
            $table->text('id_number');
            $table->text('pay_date');
            $table->decimal('bonus', 8, 2)->default(0.00);
            $table->decimal('total_salary', 8, 2)->default(0.00);
            $table->text('payment_method');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_payroll');
        Schema::dropIfExists('employee_dtr');
        Schema::dropIfExists('student_event_attendance_checklist');
        Schema::dropIfExists('student_class_attendance_checklist');
    }
};
