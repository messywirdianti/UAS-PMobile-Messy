import 'package:flutter/material.dart';

class Setting extends StatelessWidget {
  const Setting({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Pengaturan Akun'),
        backgroundColor: Color(0xFF4C53A5),
      ),
      body: SingleChildScrollView(
        child: Padding(
          padding: const EdgeInsets.all(20),
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              // Bagian Profil
              const Text(
                'Pengaturan Profil',
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
                        leading: const Icon(Icons.person, color: Color(0xFF4C53A5)),
                        title: const Text('Informasi Profil'),
                        trailing: const Icon(Icons.arrow_forward_ios),
                        onTap: () {
                          // Aksi untuk membuka halaman informasi profil
                        },
                      ),
                      const Divider(),
                      ListTile(
                        leading: const Icon(Icons.lock, color: Color(0xFF4C53A5)),
                        title: const Text('Ubah Kata Sandi'),
                        trailing: const Icon(Icons.arrow_forward_ios),
                        onTap: () {
                          // Aksi untuk membuka halaman ubah kata sandi
                        },
                      ),
                    ],
                  ),
                ),
              ),
              const SizedBox(height: 20),
              // Bagian Notifikasi
              const Text(
                'Pengaturan Notifikasi',
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
                      SwitchListTile(
                        activeColor: Color(0xFF4C53A5),
                        contentPadding: EdgeInsets.zero,
                        title: const Text('Terima Notifikasi'),
                        value: true,
                        onChanged: (bool value) {
                          // Aksi untuk mengubah status notifikasi
                        },
                      ),
                      const Divider(),
                      ListTile(
                        leading: const Icon(Icons.notifications, color: Color(0xFF4C53A5)),
                        title: const Text('Pengaturan Notifikasi'),
                        trailing: const Icon(Icons.arrow_forward_ios),
                        onTap: () {
                          // Aksi untuk membuka halaman pengaturan notifikasi
                        },
                      ),
                    ],
                  ),
                ),
              ),
              const SizedBox(height: 20),
              // Bagian Privasi
              const Text(
                'Pengaturan Privasi',
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
                        leading: const Icon(Icons.privacy_tip, color: Color(0xFF4C53A5)),
                        title: const Text('Kebijakan Privasi'),
                        trailing: const Icon(Icons.arrow_forward_ios),
                        onTap: () {
                          // Aksi untuk membuka halaman kebijakan privasi
                        },
                      ),
                      const Divider(),
                      ListTile(
                        leading: const Icon(Icons.security, color: Color(0xFF4C53A5)),
                        title: const Text('Pengaturan Keamanan'),
                        trailing: const Icon(Icons.arrow_forward_ios),
                        onTap: () {
                          // Aksi untuk membuka halaman pengaturan keamanan
                        },
                      ),
                    ],
                  ),
                ),
              ),
              const SizedBox(height: 20),
              // Bagian Bantuan
              const Text(
                'Bantuan & Dukungan',
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
                        leading: const Icon(Icons.help, color: Color(0xFF4C53A5)),
                        title: const Text('Bantuan'),
                        trailing: const Icon(Icons.arrow_forward_ios),
                        onTap: () {
                          // Aksi untuk membuka halaman bantuan
                        },
                      ),
                      const Divider(),
                      ListTile(
                        leading: const Icon(Icons.contact_support, color: Color(0xFF4C53A5)),
                        title: const Text('Hubungi Dukungan'),
                        trailing: const Icon(Icons.arrow_forward_ios),
                        onTap: () {
                          // Aksi untuk membuka halaman dukungan
                        },
                      ),
                    ],
                  ),
                ),
              ),
              const SizedBox(height: 20),
              // Bagian Tentang Aplikasi
              const Text(
                'Tentang Aplikasi',
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
                        leading: const Icon(Icons.info, color: Color(0xFF4C53A5)),
                        title: const Text('Versi Aplikasi'),
                        subtitle: const Text('1.0.0'),
                      ),
                      const Divider(),
                      ListTile(
                        leading: const Icon(Icons.star, color: Color(0xFF4C53A5)),
                        title: const Text('Beri Rating'),
                        trailing: const Icon(Icons.arrow_forward_ios),
                        onTap: () {
                          // Aksi untuk membuka halaman pemberian rating
                        },
                      ),
                    ],
                  ),
                ),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
