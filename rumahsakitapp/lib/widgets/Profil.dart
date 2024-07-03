import 'package:flutter/material.dart';

class Profil extends StatelessWidget {
  const Profil({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Profil Pasien'),
        backgroundColor: Color(0xFF4C53A5),
      ),
      body: SingleChildScrollView(
        child: Column(
          children: [
            // Bagian atas dengan gambar profil dan nama
            Container(
              padding: const EdgeInsets.all(20),
              decoration: BoxDecoration(
                color: Color(0xFF4C53A5),
                borderRadius: BorderRadius.vertical(
                  bottom: Radius.circular(30),
                ),
              ),
              child: Column(
                children: [
                  CircleAvatar(
                    radius: 50,
                    backgroundImage: AssetImage('assets/images/ichi.jpg'), // Ganti dengan path gambar profil
                  ),
                  const SizedBox(height: 10),
                  const Text(
                    'Messy Wirdianti',
                    style: TextStyle(
                      fontSize: 22,
                      fontWeight: FontWeight.bold,
                      color: Colors.white,
                    ),
                  ),
                  const SizedBox(height: 5),
                  const Text(
                    'mesiwirdianti@gmail.com',
                    style: TextStyle(
                      fontSize: 16,
                      color: Colors.white70,
                    ),
                  ),
                ],
              ),
            ),
            const SizedBox(height: 20),
            // Informasi profil
            Padding(
              padding: const EdgeInsets.symmetric(horizontal: 20),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  const Text(
                    'Informasi Profil',
                    style: TextStyle(
                      fontSize: 18,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                  const SizedBox(height: 10),
                  Card(
                    elevation: 2.0,
                    shape: RoundedRectangleBorder(
                      borderRadius: BorderRadius.circular(8.0),
                    ),
                    child: Padding(
                      padding: const EdgeInsets.all(16.0),
                      child: Column(
                        children: [
                          ListTile(
                            leading: const Icon(Icons.phone, color: Color(0xFF4C53A5)),
                            title: const Text('Nomor Telepon'),
                            subtitle: const Text('+62 82170395745'),
                          ),
                          const Divider(),
                          ListTile(
                            leading: const Icon(Icons.home, color: Color(0xFF4C53A5)),
                            title: const Text('Alamat'),
                            subtitle: const Text('Jl. Rohana Kudus Padang Panjang'),
                          ),
                          const Divider(),
                          ListTile(
                            leading: const Icon(Icons.calendar_today, color: Color(0xFF4C53A5)),
                            title: const Text('Tanggal Lahir'),
                            subtitle: const Text('17 Januari 2003'),
                          ),
                          const Divider(),
                          ListTile(
                            leading: const Icon(Icons.assignment_ind, color: Color(0xFF4C53A5)),
                            title: const Text('No. Rekam Medis'),
                            subtitle: const Text('RM12345678'),
                          ),
                        ],
                      ),
                    ),
                  ),
                  const SizedBox(height: 20),
                  const Text(
                    'Pengaturan Akun',
                    style: TextStyle(
                      fontSize: 18,
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                  const SizedBox(height: 10),
                  Card(
                    elevation: 2.0,
                    shape: RoundedRectangleBorder(
                      borderRadius: BorderRadius.circular(8.0),
                    ),
                    child: Padding(
                      padding: const EdgeInsets.all(16.0),
                      child: Column(
                        children: [
                          ListTile(
                            leading: const Icon(Icons.lock, color: Color(0xFF4C53A5)),
                            title: const Text('Ubah Kata Sandi'),
                            onTap: () {
                              // Aksi untuk ubah kata sandi
                            },
                          ),
                          const Divider(),
                          ListTile(
                            leading: const Icon(Icons.logout, color: Color(0xFF4C53A5)),
                            title: const Text('Keluar'),
                            onTap: () {
                              // Aksi untuk keluar dari akun
                            },
                          ),
                        ],
                      ),
                    ),
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }
}
