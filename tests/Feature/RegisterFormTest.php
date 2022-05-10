<?php

namespace Tests\Feature;

use App\Http\Livewire\RegisterForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class RegisterFormTest extends TestCase
{
    public function test_exists_of_register_component(){
        $this->get('/')
            ->assertSeeLivewire('register-form');
    }
    public function test_submit_to_the_form(){
        Livewire::test(RegisterForm::class)
            ->set('name','Ahmed')
            ->set('email','ahmed@test.com')
            ->set('password','123')
            ->call('submitForm')
            ->assertSee('تم الاضافة بنجاح');
    }
    public function test_email_validation(){
        Livewire::test(RegisterForm::class)
            ->set('name','Ahmed')
            ->set('password','123')
            ->set('email','ahmed.com')
            ->call('submitForm')
            ->assertHasErrors(['email'=>'email']);
    }
}
