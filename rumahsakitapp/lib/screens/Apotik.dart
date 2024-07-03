import 'package:flutter/material.dart';

class Apotik extends StatelessWidget {
  const Apotik({Key? key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    // Dummy data untuk riwayat konsumsi obat
    List<Map<String, dynamic>> prescriptions = [
      {
        'namaPasien': 'Budi',
        'tanggalKunjungan': '2024-07-05',
        'poliKunjungan': 'Poli Jantung',
        'obat': ['Paracetamol', 'Amoxicillin'],
        'apoteker': 'Dr. Ani Apoteker',
        'tanggalAmbil': '2024-07-06',
      },
      {
        'namaPasien': 'Budi',
        'tanggalKunjungan': '2024-07-06',
        'poliKunjungan': 'Poli Mata',
        'obat': ['Ibuprofen', 'Vitamin C'],
        'apoteker': 'Dr. Budi Apoteker',
        'tanggalAmbil': '2024-07-07',
      },
      // Tambahkan data lain sesuai kebutuhan
    ];

    return Scaffold(
      appBar: AppBar(
        title: const Text('Apotik'),
        backgroundColor: const Color(0xFF4C53A5),
      ),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: ListView.builder(
          itemCount: prescriptions.length,
          itemBuilder: (context, index) {
            return Card(
              elevation: 3,
              margin: const EdgeInsets.only(bottom: 16),
              shape: RoundedRectangleBorder(
                borderRadius: BorderRadius.circular(10),
              ),
              child: Padding(
                padding: const EdgeInsets.all(16.0),
                child: Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  children: [
                    Row(
                      mainAxisAlignment: MainAxisAlignment.spaceBetween,
                      children: [
                        Text(
                          'Nama Pasien: ${prescriptions[index]['namaPasien']}',
                          style: const TextStyle(fontSize: 16, fontWeight: FontWeight.bold),
                        ),
                        Text(
                          'Tanggal Kunjungan: ${prescriptions[index]['tanggalKunjungan']}',
                          style: const TextStyle(fontSize: 14, color: Colors.grey),
                        ),
                      ],
                    ),
                    const SizedBox(height: 8),
                    Text(
                      'Poli Kunjungan: ${prescriptions[index]['poliKunjungan']}',
                      style: const TextStyle(fontSize: 14),
                    ),
                    const SizedBox(height: 8),
                    Text(
                      'Obat: ',
                      style: const TextStyle(fontSize: 14, fontWeight: FontWeight.bold),
                    ),
                    Column(
                      crossAxisAlignment: CrossAxisAlignment.start,
                      children: List.generate(
                        prescriptions[index]['obat'].length,
                            (i) => Text(
                          '- ${prescriptions[index]['obat'][i]}',
                          style: const TextStyle(fontSize: 14),
                        ),
                      ),
                    ),
                    const SizedBox(height: 8),
                    Text(
                      'Apoteker: ${prescriptions[index]['apoteker']}',
                      style: const TextStyle(fontSize: 14),
                    ),
                    const SizedBox(height: 8),
                    Text(
                      'Tanggal Ambil Obat: ${prescriptions[index]['tanggalAmbil']}',
                      style: const TextStyle(fontSize: 14),
                    ),
                  ],
                ),
              ),
            );
          },
        ),
      ),
    );
  }
}

