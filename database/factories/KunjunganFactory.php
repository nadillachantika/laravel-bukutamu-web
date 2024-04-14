<?php
namespace Database\Factories;

use App\Models\Kunjungan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class KunjunganFactory extends Factory
{
    protected $model = Kunjungan::class;

    public function definition()
    {
        $tamuIds = [2, 3];
        $tamuId = $this->faker->randomElement($tamuIds);

        return [
            'tamu_id' => $tamuId,
            'tanggal' => $this->faker->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            'jenis_kunjungan' => $this->faker->randomElement(['Kelompok', 'Perorangan']),
            'waktu_masuk' => $this->faker->time('H:i:s'),
            'waktu_keluar' => $this->faker->time('H:i:s'),
            'keterangan_kunjungan' => $this->faker->sentence
        ];
    }
}
