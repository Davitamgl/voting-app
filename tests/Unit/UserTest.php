<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
	use RefreshDatabase;

	/** @test */
	public function can_check_if_user_is_an_admin()
	{
		$user = User::factory()->make([
			'name'  => 'David',
			'email' => 'd@redberry.ge',
		]);

		$userB = User::factory()->make([
			'name'  => 'Andre',
			'email' => 'user@user.com',
		]);

		$this->assertTrue($user->isAdmin());
		$this->assertFalse($userB->isAdmin());
	}
}
