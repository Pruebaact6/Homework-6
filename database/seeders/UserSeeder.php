<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Group;
use App\Models\User2;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear roles 
        $adminRole = Role::firstOrCreate(['name' => 'Administrative']);
        $teacherRole = Role::firstOrCreate(['name' => 'Teacher']);
        $studentRole = Role::firstOrCreate(['name' => 'Student']);
        
        // Crear un grupo si no existe
        $defaultGroup = Group::firstOrCreate(['name' => 'Group 1']);
        
        // Crear usuarios
        User2::create([
            'nombre' => 'Admon',
            'apellido' => 'User',
            'email' => 'admon@robotics.com',
            'password' => bcrypt('Adm@2022'),
            'role_id' => $adminRole->id,
            'group_id' => null, // No asignamos grupo al administrador
        ]);
        
        User2::create([
            'nombre' => 'Tecmilenio',
            'apellido' => 'User',
            'email' => 'tecmilenio@robotics.com',
            'password' => bcrypt('Adm@2022'),
            'role_id' => $teacherRole->id,
            'group_id' => null, // No asignamos grupo al profesor
        ]);
        
        User2::create([
            'nombre' => 'Student',
            'apellido' => 'User',
            'email' => 'student@robotics.com',
            'password' => bcrypt('Adm@2022'),
            'role_id' => $studentRole->id,
            'group_id' => $defaultGroup->id, // Asignamos el grupo 1 al estudiante
        ]);
    }
}
