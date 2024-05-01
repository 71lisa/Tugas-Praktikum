<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Dosen::class;
    public function definition(): array
    {
        return [
            'nama_dosen' => $this->faker->name(),
            'jekel' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'prodi' => $this->faker->randomElement(['Perpajakan', 'Pendidikan Dokter', 'Teknik Lingkungan', 'Matematika', 'Keperawatan', 'Hubungan Internasional', 'Statistika', 'Farmasi']),
            'jabatan' => $this->faker->randomElement(['Lektor Kepala', 'Guru Besar', 'Asisten Ahli', 'Tenaga Pengajar']),
            'nip' => $this->faker->numerify('#######')
        ];
    }
}
