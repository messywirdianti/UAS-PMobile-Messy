import 'package:flutter/material.dart';

class JadwalDokter extends StatelessWidget {
  const JadwalDokter({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Jadwal Dokter'),
        backgroundColor: const Color(0xFF4C53A5),
      ),
      body: SingleChildScrollView(
        child: Column(
          children: [
            Padding(
              padding: const EdgeInsets.all(16.0),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  const Text(
                    'Filter Berdasarkan',
                    style: TextStyle(fontSize: 16, fontWeight: FontWeight.bold),
                  ),
                  const SizedBox(height: 10),
                  Row(
                    children: [
                      Expanded(
                        child: DropdownButtonFormField<String>(
                          decoration: InputDecoration(
                            labelText: 'Spesialis',
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(25),
                            ),
                          ),
                          items: const [
                            DropdownMenuItem(value: 'Spesialis 1', child: Text('Spesialis 1')),
                            DropdownMenuItem(value: 'Spesialis 2', child: Text('Spesialis 2')),
                          ],
                          onChanged: (value) {},
                        ),
                      ),
                      const SizedBox(width: 10),
                      Expanded(
                        child: DropdownButtonFormField<String>(
                          decoration: InputDecoration(
                            labelText: 'Sub Spesialis',
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(25),
                            ),
                          ),
                          items: const [
                            DropdownMenuItem(value: 'Sub Spesialis 1', child: Text('Sub Spesialis 1')),
                            DropdownMenuItem(value: 'Sub Spesialis 2', child: Text('Sub Spesialis 2')),
                          ],
                          onChanged: (value) {},
                        ),
                      ),
                    ],
                  ),
                  const SizedBox(height: 10),
                  TextFormField(
                    decoration: InputDecoration(
                      labelText: 'Cari Dokter',
                      border: OutlineInputBorder(
                        borderRadius: BorderRadius.circular(25),
                      ),
                      prefixIcon: const Icon(Icons.search),
                    ),
                  ),
                  const SizedBox(height: 20),
                  const Text(
                    'Daftar Dokter',
                    style: TextStyle(fontSize: 16, fontWeight: FontWeight.bold),
                  ),
                ],
              ),
            ),
            ListView.builder(
              shrinkWrap: true,
              physics: const NeverScrollableScrollPhysics(),
              itemCount: 10, // Ganti dengan jumlah dokter sebenarnya
              itemBuilder: (context, index) {
                return Padding(
                  padding: const EdgeInsets.symmetric(horizontal: 16.0, vertical: 8.0),
                  child: Card(
                    shape: RoundedRectangleBorder(
                      borderRadius: BorderRadius.circular(15),
                    ),
                    elevation: 4,
                    child: Padding(
                      padding: const EdgeInsets.all(16.0),
                      child: Row(
                        children: [
                          CircleAvatar(
                            radius: 30,
                            backgroundImage: AssetImage('assets/images/dokter.png'), // Ganti dengan path gambar dokter
                          ),
                          const SizedBox(width: 20),
                          Expanded(
                            child: Column(
                              crossAxisAlignment: CrossAxisAlignment.start,
                              children: const [
                                Text(
                                  'Dr. dr. Dwitya Elvira, SpPD-KAI, FINASIM',
                                  style: TextStyle(
                                    fontSize: 16,
                                    fontWeight: FontWeight.bold,
                                  ),
                                ),
                                SizedBox(height: 5),
                                Text(
                                  'Spesialis Penyakit Dalam\nAlergi-Imunologi Klinik',
                                  style: TextStyle(fontSize: 14),
                                ),
                              ],
                            ),
                          ),
                          ElevatedButton(
                            onPressed: () {
                              Navigator.push(
                                context,
                                MaterialPageRoute(
                                  builder: (context) => DetailJadwalDokter(
                                    namaDokter: 'Dr. dr. Dwitya Elvira, SpPD-KAI, FINASIM',
                                    spesialis: 'Spesialis Penyakit Dalam\nAlergi-Imunologi Klinik',
                                    unit: 'RSUP. Dr. M. Djamil Padang',
                                    jadwal: {
                                      'Senin': '',
                                      'Selasa': '',
                                      'Rabu': '',
                                      'Kamis': '09:30 - 15:00',
                                      'Jumat': '',
                                    },
                                  ),
                                ),
                              );
                            },
                            style: ElevatedButton.styleFrom(
                              backgroundColor: const Color(0xFF4C53A5),
                              shape: RoundedRectangleBorder(
                                borderRadius: BorderRadius.circular(20),
                              ),
                            ),
                            child: const Text('Lihat Jadwal'),
                          ),
                        ],
                      ),
                    ),
                  ),
                );
              },
            ),
          ],
        ),
      ),
    );
  }
}

class DetailJadwalDokter extends StatelessWidget {
  final String namaDokter;
  final String spesialis;
  final String unit;
  final Map<String, String> jadwal;

  const DetailJadwalDokter({
    required this.namaDokter,
    required this.spesialis,
    required this.unit,
    required this.jadwal,
    super.key,
  });

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text('Detail Dokter'),
        backgroundColor: const Color(0xFF4C53A5),
      ),
      body: SingleChildScrollView(
        child: Padding(
          padding: const EdgeInsets.all(16.0),
          child: Column(
            children: [
              CircleAvatar(
                radius: 50,
                backgroundImage: AssetImage('assets/images/dokter.png'), // Ganti dengan path gambar dokter
              ),
              const SizedBox(height: 10),
              Text(
                namaDokter,
                style: const TextStyle(fontSize: 20, fontWeight: FontWeight.bold),
              ),
              const SizedBox(height: 5),
              Text(
                spesialis,
                style: const TextStyle(fontSize: 16, fontWeight: FontWeight.w500),
                textAlign: TextAlign.center,
              ),
              const SizedBox(height: 5),
              Text(
                unit,
                style: const TextStyle(fontSize: 14),
                textAlign: TextAlign.center,
              ),
              const SizedBox(height: 20),
              Container(
                padding: const EdgeInsets.all(16.0),
                decoration: BoxDecoration(
                  color: Colors.white,
                  borderRadius: BorderRadius.circular(10),
                  boxShadow: [
                    BoxShadow(
                      color: Colors.black12,
                      blurRadius: 10,
                    ),
                  ],
                ),
                child: Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  children: [
                    const Text(
                      'Biografi',
                      style: TextStyle(fontSize: 18, fontWeight: FontWeight.bold),
                    ),
                    const SizedBox(height: 10),
                    Row(
                      mainAxisAlignment: MainAxisAlignment.spaceBetween,
                      children: [
                        const Text('Spesialis', style: TextStyle(fontSize: 16)),
                        Text(spesialis, style: const TextStyle(fontSize: 16, fontWeight: FontWeight.w500)),
                      ],
                    ),
                    const SizedBox(height: 5),
                    Row(
                      mainAxisAlignment: MainAxisAlignment.spaceBetween,
                      children: [
                        const Text('Sub Spesialis', style: TextStyle(fontSize: 16)),
                        Text('Alergi-Imunologi Klinik', style: const TextStyle(fontSize: 16, fontWeight: FontWeight.w500)),
                      ],
                    ),
                    const SizedBox(height: 5),
                    Row(
                      mainAxisAlignment: MainAxisAlignment.spaceBetween,
                      children: [
                        const Text('Unit', style: TextStyle(fontSize: 16)),
                        Text(unit, style: const TextStyle(fontSize: 16, fontWeight: FontWeight.w500)),
                      ],
                    ),
                  ],
                ),
              ),
              const SizedBox(height: 20),
              const Text(
                'Jadwal',
                style: TextStyle(fontSize: 18, fontWeight: FontWeight.bold),
              ),
              const SizedBox(height: 10),
              Row(
                mainAxisAlignment: MainAxisAlignment.spaceBetween,
                children: jadwal.entries.map((entry) {
                  return Expanded(
                    child: Container(
                      padding: const EdgeInsets.all(8.0),
                      margin: const EdgeInsets.symmetric(horizontal: 4.0),
                      decoration: BoxDecoration(
                        color: entry.value.isNotEmpty ? Colors.pink[100] : Colors.grey[200],
                        borderRadius: BorderRadius.circular(15),
                      ),
                      child: Column(
                        children: [
                          Text(
                            entry.key,
                            style: const TextStyle(fontSize: 16, fontWeight: FontWeight.bold),
                          ),
                          const SizedBox(height: 5),
                          Text(
                            entry.value.isNotEmpty ? entry.value : '-',
                            style: const TextStyle(fontSize: 14),
                          ),
                        ],
                      ),
                    ),
                  );
                }).toList(),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
