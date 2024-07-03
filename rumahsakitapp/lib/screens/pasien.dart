import 'package:flutter/material.dart';
import 'package:rawatjalanapp/model/pasien.dart';
import 'package:rawatjalanapp/services/pasien_service.dart';

class PasienScreen extends StatefulWidget {
  const PasienScreen({Key? key}) : super(key: key);

  @override
  _PasienScreenState createState() => _PasienScreenState();
}

class _PasienScreenState extends State<PasienScreen> {
  final GlobalKey<FormState> _formKey = GlobalKey<FormState>();

  final TextEditingController _namaPenggunaController = TextEditingController();
  final TextEditingController _noKTPController = TextEditingController();
  final TextEditingController _tempatLahirController = TextEditingController();
  final TextEditingController _tanggalLahirController = TextEditingController();
  final TextEditingController _noBPJSController = TextEditingController();
  final TextEditingController _noHpController = TextEditingController();
  final TextEditingController _emailController = TextEditingController();
  final TextEditingController _alamatController = TextEditingController();

  String _jekel = 'L';

  Future<void> _submitForm() async {
    if (_formKey.currentState!.validate()) {
      _formKey.currentState!.save();

      final Pasien pasien = Pasien(
        namaPengguna: _namaPenggunaController.text,
        noKTP: _noKTPController.text,
        jekel: _jekel,
        tempatLahir: _tempatLahirController.text,
        tanggalLahir: _tanggalLahirController.text,
        noBPJS: _noBPJSController.text,
        noHp: _noHpController.text,
        email: _emailController.text,
        alamat: _alamatController.text,
      );

      print('Form validated');
      print('Pasien created: ${pasien.toJson()}');

      try {
        final PasienService pasienService = PasienService();
        final bool success = await pasienService.addPasien(pasien);

        print('PasienService addPasien result: $success');

        if (success) {
          Navigator.push(
            context,
            MaterialPageRoute(
              builder: (context) => DetailPasienPage(pasien: pasien),
            ),
          );
        } else {
          ScaffoldMessenger.of(context).showSnackBar(
            const SnackBar(content: Text('Failed to add pasien data. Silakan coba lagi.')),
          );
        }
      } catch (e) {
        print('Error adding pasien: $e');
        ScaffoldMessenger.of(context).showSnackBar(
          SnackBar(content: Text('Error: $e')),
        );
      }
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Data Pasien'),
        backgroundColor: const Color(0xFF4C53A5),
      ),
      body: SingleChildScrollView(
        child: Padding(
          padding: const EdgeInsets.all(16.0),
          child: Form(
            key: _formKey,
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.stretch,
              children: [
                const Text(
                  'Form Data Pasien',
                  style: TextStyle(
                    fontSize: 24,
                    fontWeight: FontWeight.bold,
                    color: Color(0xFF4C53A5),
                  ),
                ),
                const SizedBox(height: 20),
                Card(
                  elevation: 4,
                  shape: RoundedRectangleBorder(
                    borderRadius: BorderRadius.circular(25), // Rounded corners
                  ),
                  child: Padding(
                    padding: const EdgeInsets.all(16.0),
                    child: Column(
                      children: [
                        TextFormField(
                          controller: _namaPenggunaController,
                          decoration: InputDecoration(
                            labelText: 'Nama Pengguna',
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(25),
                            ),
                          ),
                          maxLength: 30,
                          validator: (value) {
                            if (value == null || value.isEmpty) {
                              return 'Masukkan Nama Pengguna';
                            }
                            return null;
                          },
                        ),
                        const SizedBox(height: 10),
                        TextFormField(
                          controller: _noKTPController,
                          decoration: InputDecoration(
                            labelText: 'No KTP',
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(25),
                            ),
                          ),
                          maxLength: 20,
                          validator: (value) {
                            if (value == null || value.isEmpty) {
                              return 'Masukkan No KTP';
                            }
                            return null;
                          },
                        ),
                        const SizedBox(height: 10),
                        DropdownButtonFormField<String>(
                          value: _jekel,
                          decoration: InputDecoration(
                            labelText: 'Jenis Kelamin',
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(25),
                            ),
                          ),
                          items: const [
                            DropdownMenuItem(
                              value: 'L',
                              child: Text('Laki-laki'),
                            ),
                            DropdownMenuItem(
                              value: 'P',
                              child: Text('Perempuan'),
                            ),
                          ],
                          onChanged: (value) {
                            setState(() {
                              _jekel = value!;
                            });
                          },
                        ),
                        const SizedBox(height: 10),
                        TextFormField(
                          controller: _tempatLahirController,
                          decoration: InputDecoration(
                            labelText: 'Tempat Lahir',
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(25),
                            ),
                          ),
                          maxLength: 20,
                          validator: (value) {
                            if (value == null || value.isEmpty) {
                              return 'Masukkan Tempat Lahir';
                            }
                            return null;
                          },
                        ),
                        const SizedBox(height: 10),
                        TextFormField(
                          controller: _tanggalLahirController,
                          decoration: InputDecoration(
                            labelText: 'Tanggal Lahir',
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(25),
                            ),
                          ),
                          keyboardType: TextInputType.datetime,
                          validator: (value) {
                            if (value == null || value.isEmpty) {
                              return 'Masukkan Tanggal Lahir';
                            }
                            return null;
                          },
                        ),
                        const SizedBox(height: 10),
                        TextFormField(
                          controller: _noBPJSController,
                          decoration: InputDecoration(
                            labelText: 'No BPJS',
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(25),
                            ),
                          ),
                          validator: (value) {
                            if (value == null || value.isEmpty) {
                              return 'Masukkan No BPJS';
                            }
                            return null;
                          },
                        ),
                        const SizedBox(height: 10),
                        TextFormField(
                          controller: _noHpController,
                          decoration: InputDecoration(
                            labelText: 'No HP',
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(25),
                            ),
                          ),
                          maxLength: 15,
                          validator: (value) {
                            if (value == null || value.isEmpty) {
                              return 'Masukkan No HP';
                            }
                            return null;
                          },
                        ),
                        const SizedBox(height: 10),
                        TextFormField(
                          controller: _emailController,
                          decoration: InputDecoration(
                            labelText: 'Email',
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(25),
                            ),
                          ),
                          validator: (value) {
                            if (value == null || value.isEmpty) {
                              return 'Masukkan Email';
                            } else if (!RegExp(r'^[^@]+@[^@]+\.[^@]+').hasMatch(value)) {
                              return 'Masukkan Email yang valid';
                            }
                            return null;
                          },
                        ),
                        const SizedBox(height: 10),
                        TextFormField(
                          controller: _alamatController,
                          decoration: InputDecoration(
                            labelText: 'Alamat',
                            border: OutlineInputBorder(
                              borderRadius: BorderRadius.circular(25),
                            ),
                          ),
                          maxLines: 3,
                          validator: (value) {
                            if (value == null || value.isEmpty) {
                              return 'Masukkan Alamat';
                            }
                            return null;
                          },
                        ),
                        const SizedBox(height: 20),
                        ElevatedButton(
                          onPressed: _submitForm,
                          style: ElevatedButton.styleFrom(
                            primary: const Color(0xFF4C53A5),
                            padding: const EdgeInsets.symmetric(horizontal: 50, vertical: 15),
                            textStyle: const TextStyle(fontSize: 16),
                          ),
                          child: const Text('Submit'),
                        ),
                      ],
                    ),
                  ),
                ),
              ],
            ),
          ),
        ),
      ),
    );
  }
}

class DetailPasienPage extends StatelessWidget {
  final Pasien pasien;

  const DetailPasienPage({Key? key, required this.pasien}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Detail Pasien'),
        backgroundColor: const Color(0xFF4C53A5),
      ),
      body: SingleChildScrollView(
        padding: const EdgeInsets.all(16.0),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.stretch,
          children: [
            const Text(
              'Detail Pasien',
              style: TextStyle(
                fontSize: 24,
                fontWeight: FontWeight.bold,
                color: Color(0xFF4C53A5),
              ),
            ),
            const SizedBox(height: 20),
            Card(
              elevation: 4,
              shape: RoundedRectangleBorder(
                borderRadius: BorderRadius.circular(25), // Rounded corners
              ),
              child: Padding(
                padding: const EdgeInsets.all(16.0),
                child: Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  children: [
                    _buildDetailItem('Nama Pengguna', pasien.namaPengguna),
                    _buildDetailItem('No KTP', pasien.noKTP),
                    _buildDetailItem('Jenis Kelamin', pasien.jekel == 'L' ? 'Laki-laki' : 'Perempuan'),
                    _buildDetailItem('Tempat Lahir', pasien.tempatLahir),
                    _buildDetailItem('Tanggal Lahir', pasien.tanggalLahir),
                    _buildDetailItem('No BPJS', pasien.noBPJS),
                    _buildDetailItem('No HP', pasien.noHp),
                    _buildDetailItem('Email', pasien.email),
                    _buildDetailItem('Alamat', pasien.alamat),
                  ],
                ),
              ),
            ),
          ],
        ),
      ),
    );
  }

  Widget _buildDetailItem(String label, String value) {
    return Padding(
      padding: const EdgeInsets.symmetric(vertical: 8.0),
      child: Row(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
          Expanded(
            flex: 3,
            child: Text(
              label,
              style: const TextStyle(fontSize: 16, fontWeight: FontWeight.bold),
            ),
          ),
          const SizedBox(width: 16),
          Expanded(
            flex: 7,
            child: Text(
              value,
              style: const TextStyle(fontSize: 16),
            ),
          ),
        ],
      ),
    );
  }
}
