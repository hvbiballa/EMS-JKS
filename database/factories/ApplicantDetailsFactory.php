<?php

namespace Database\Factories;

use App\Models\ApplicantDetail;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicantDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ApplicantDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'app_name' => $this->faker->name(),
            'app_ic' => $this->faker->unique()->randomNumber(12),
            'app_birthdate' => $this->faker->date(),
            'app_age' => $this->faker->numberBetween(18, 60),
            'app_nationality' => $this->faker->country(),
            'app_houseaddress' => $this->faker->address(),
            'app_addressLatest' => $this->faker->address(),
            'app_phoneNumber' => $this->faker->phoneNumber(),
            'app_nation' => $this->faker->country(),
            'app_education' => $this->faker->randomElement(['High School', 'Bachelor', 'Master', 'PhD']),
            'app_jobSector' => $this->faker->jobTitle(),
            'app_jobName' => $this->faker->jobTitle(),
            'app_jobSalary' => $this->faker->numberBetween(1000, 10000),
            'app_marriageStatus' => $this->faker->randomElement(['Single', 'Married', 'Divorced', 'Widowed']),
            'app_mualafStatus' => $this->faker->boolean(),
        ];
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterCreating(function (ApplicantDetail $applicantDetail) {
            $user = User::factory()->create([
                'icnumber' => $applicantDetail->app_ic,
                'email' => $this->faker->unique()->safeEmail(),
                'password' => bcrypt('password'),
                'role' => 'user',
            ]);

            $applicantDetail->applicantDetail()->associate($user);
            $applicantDetail->save();
        });
    }
}
