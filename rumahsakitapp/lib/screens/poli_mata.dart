import 'package:flutter/material.dart';

class PoliMata extends StatefulWidget {
  const PoliMata({super.key});

  @override
  _PoliMataState createState() => _PoliMataState();
}

class _PoliMataState extends State<PoliMata> {
  final TextEditingController _searchController = TextEditingController();
  final List<String> _doctors = [
    'Dr. Aisyah Mata Sp.M',
    'Dr. Budi Oftalmologi Sp.M',
    'Dr. Chandra Mata Sp.M',
    'Dr. Dwi Vision Sp.M',
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
        title: const Text('Poli Mata'),
        backgroundColor: const Color(0xFF4C53A5),
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
                prefixIcon: const Icon(Icons.search),
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
                      subtitle: const Text('Specialist in Ophthalmology'),
                      // trailing: Icon(Icons.arrow_forward_ios),
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

