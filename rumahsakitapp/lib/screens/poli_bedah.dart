import 'package:flutter/material.dart';

class PoliBedah extends StatelessWidget {
  PoliBedah({Key? key}) : super(key: key);

  // Dummy data for doctors
  final List<String> doctors = [
    'Dr. Andi Bedah Sp.B',
    'Dr. Budi Bedah Umum Sp.B',
    'Dr. Candra Bedah Ortho Sp.B',
    'Dr. Dwi Bedah Saraf Sp.B',
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Poli Bedah'),
        backgroundColor: const Color(0xFF4C53A5),
      ),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.stretch,
          children: [
            // Search bar
            TextField(
              decoration: InputDecoration(
                hintText: 'Cari dokter...',
                prefixIcon: Icon(Icons.search),
                filled: true,
                fillColor: Colors.grey[200],
                contentPadding: const EdgeInsets.symmetric(vertical: 12, horizontal: 20),
                border: OutlineInputBorder(
                  borderRadius: BorderRadius.circular(30),
                  borderSide: BorderSide.none,
                ),
              ),
              onChanged: (value) {
                // Handle search logic here
              },
            ),
            const SizedBox(height: 20),
            // List of doctors
            Expanded(
              child: ListView.builder(
                itemCount: doctors.length,
                itemBuilder: (context, index) {
                  return Card(
                    elevation: 3,
                    shape: RoundedRectangleBorder(
                      borderRadius: BorderRadius.circular(15),
                    ),
                    child: ListTile(
                      title: Text(doctors[index]),
                      leading: CircleAvatar(
                        child: Text('${index + 1}'),
                      ),
                      trailing: IconButton(
                        icon: Icon(Icons.arrow_forward),
                        onPressed: () {
                          // Navigate to doctor's detail page or perform action
                        },
                      ),
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

