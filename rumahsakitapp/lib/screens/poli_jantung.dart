import 'package:flutter/material.dart';

class PoliJantung extends StatefulWidget {
  const PoliJantung({super.key});

  @override
  State<PoliJantung> createState() => _PoliJantungState();
}

class _PoliJantungState extends State<PoliJantung> {
  final TextEditingController _searchController = TextEditingController();
  final List<String> _doctors = [
    'Dr. Andi Jantung Sp.JP',
    'Dr. Budi Kardiologi Sp.JP',
    'Dr. Chandra Kardiovaskular Sp.JP',
    'Dr. Dwi Hidayat Sp.JP',
  ];
  List<String> _filteredDoctors = [];

  @override
  void initState() {
    super.initState();
    _filteredDoctors = _doctors;
  }

  void _filterDoctors(String query) {
    setState(() {
      if (query.isEmpty) {
        _filteredDoctors = _doctors;
      } else {
        _filteredDoctors = _doctors
            .where((doctor) => doctor.toLowerCase().contains(query.toLowerCase()))
            .toList();
      }
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Poli Jantung'),
        backgroundColor: Color(0xFF4C53A5),
      ),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: Column(
          children: [
            TextField(
              controller: _searchController,
              onChanged: _filterDoctors,
              decoration: InputDecoration(
                labelText: 'Search Doctor',
                prefixIcon: Icon(Icons.search),
                border: OutlineInputBorder(
                  borderRadius: BorderRadius.circular(10),
                ),
              ),
            ),
            const SizedBox(height: 20),
            Expanded(
              child: ListView.builder(
                itemCount: _filteredDoctors.length,
                itemBuilder: (context, index) {
                  return Card(
                    shape: RoundedRectangleBorder(
                      borderRadius: BorderRadius.circular(10),
                    ),
                    elevation: 3,
                    margin: const EdgeInsets.symmetric(vertical: 8),
                    child: ListTile(
                      leading: CircleAvatar(
                        backgroundImage: AssetImage('assets/images/doctor.png'), // Placeholder for doctor image
                      ),
                      title: Text(_filteredDoctors[index]),
                      subtitle: Text('Specialist in Cardiology'),
                      onTap: () {
                        // Aksi ketika dokter dipilih
                      },
                    ),
                  );
                },
              ),
            ),
          ],
        ),
      ),
    );
  }
}
