import 'package:flutter/material.dart';
import 'package:intl/intl.dart';

class DaftarOnline extends StatefulWidget {
  const DaftarOnline({Key? key}) : super(key: key);

  @override
  _DaftarOnlinePageState createState() => _DaftarOnlinePageState();
}

class _DaftarOnlinePageState extends State<DaftarOnline> {
  final _formKey = GlobalKey<FormState>();
  final TextEditingController _namaController = TextEditingController();
  final TextEditingController _tempatLahirController = TextEditingController();
  final TextEditingController _tanggalLahirController = TextEditingController();
  final TextEditingController _noHpController = TextEditingController();
  final TextEditingController _asalRujukanController = TextEditingController();
  String? _jekel;
  String? _poliTujuan;
  String? _dokter;
  String? _pekerjaan;
  String? _agama;
  String? _kewarganegaraan;
  String _tanggalKunjungan = DateFormat('yyyy-MM-dd').format(DateTime.now());
  int _nomorAntrian = 1; // This should be fetched from a backend

  // Dummy data for doctors and departments
  List<String> doctors = [
    'Dr. Andi Jantung Sp.JP',
    'Dr. Budi Kardiologi Sp.JP',
    'Dr. Chandra Kardiovaskular Sp.JP',
    'Dr. Dwi Hidayat Sp.JP',
  ];

  List<String> departments = [
    'Poli Mata',
    'Poli Jantung',
    'Poli Umum',
    'Poli Gigi',
  ];

  void _submitForm() {
    if (_formKey.currentState!.validate()) {
      // Simulate an increment in the queue number
      setState(() {
        _nomorAntrian += 1;
      });

      // Navigate to the queue number page
      Navigator.push(
        context,
        MaterialPageRoute(
          builder: (context) => QueueNumberPage(
            nomorAntrian: _nomorAntrian,
            namaLengkap: _namaController.text,
            poliTujuan: _poliTujuan!,
            dokter: _dokter!, // Pass the selected doctor
          ),
        ),
      );

      // Here, send the data to the backend or save it
    }
  }

  InputDecoration _buildInputDecoration(String labelText) {
    return InputDecoration(
      labelText: labelText,
      filled: true,
      fillColor: Colors.grey[200],
      contentPadding: const EdgeInsets.symmetric(vertical: 20, horizontal: 25),
      border: OutlineInputBorder(
        borderRadius: BorderRadius.circular(30),
        borderSide: BorderSide.none,
      ),
      focusedBorder: OutlineInputBorder(
        borderRadius: BorderRadius.circular(30),
        borderSide: const BorderSide(color: Color(0xFF4C53A5)),
      ),
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Daftar Online'),
        backgroundColor: const Color(0xFF4C53A5),
      ),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: Form(
          key: _formKey,
          child: ListView(
            children: [
              TextFormField(
                controller: _namaController,
                decoration: _buildInputDecoration('Nama Lengkap'),
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Harap masukkan nama lengkap';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 15),
              TextFormField(
                controller: _tempatLahirController,
                decoration: _buildInputDecoration('Tempat Lahir'),
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Harap masukkan tempat lahir';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 15),
              TextFormField(
                controller: _tanggalLahirController,
                decoration: _buildInputDecoration('Tanggal Lahir'),
                onTap: () async {
                  DateTime? pickedDate = await showDatePicker(
                    context: context,
                    initialDate: DateTime.now(),
                    firstDate: DateTime(1900),
                    lastDate: DateTime(2101),
                  );
                  if (pickedDate != null) {
                    setState(() {
                      _tanggalLahirController.text = DateFormat('yyyy-MM-dd').format(pickedDate);
                    });
                  }
                },
                readOnly: true,
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Harap masukkan tanggal lahir';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 15),
              DropdownButtonFormField<String>(
                value: _jekel,
                decoration: _buildInputDecoration('Jenis Kelamin'),
                items: ['Laki-laki', 'Perempuan'].map((String value) {
                  return DropdownMenuItem<String>(
                    value: value,
                    child: Text(value),
                  );
                }).toList(),
                onChanged: (newValue) {
                  setState(() {
                    _jekel = newValue!;
                  });
                },
                validator: (value) {
                  if (value == null) {
                    return 'Harap pilih jenis kelamin';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 15),
              TextFormField(
                controller: _noHpController,
                decoration: _buildInputDecoration('Nomor HP'),
                keyboardType: TextInputType.phone,
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Harap masukkan nomor HP';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 15),
              TextFormField(
                controller: _asalRujukanController,
                decoration: _buildInputDecoration('Asal Rujukan'),
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Harap masukkan asal rujukan';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 15),
              DropdownButtonFormField<String>(
                value: _poliTujuan,
                decoration: _buildInputDecoration('Poli Tujuan'),
                items: departments.map((String value) {
                  return DropdownMenuItem<String>(
                    value: value,
                    child: Text(value),
                  );
                }).toList(),
                onChanged: (newValue) {
                  setState(() {
                    _poliTujuan = newValue!;
                  });
                },
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Harap pilih poli tujuan';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 15),
              DropdownButtonFormField<String>(
                value: _dokter,
                decoration: _buildInputDecoration('Dokter'),
                items: doctors.map((String value) {
                  return DropdownMenuItem<String>(
                    value: value,
                    child: Text(value),
                  );
                }).toList(),
                onChanged: (newValue) {
                  setState(() {
                    _dokter = newValue!;
                  });
                },
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Harap pilih dokter';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 15),
              TextFormField(
                decoration: _buildInputDecoration('Pekerjaan'),
                onChanged: (value) {
                  setState(() {
                    _pekerjaan = value;
                  });
                },
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Harap masukkan pekerjaan';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 15),
              TextFormField(
                decoration: _buildInputDecoration('Agama'),
                onChanged: (value) {
                  setState(() {
                    _agama = value;
                  });
                },
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Harap masukkan agama';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 15),
              TextFormField(
                decoration: _buildInputDecoration('Kewarganegaraan'),
                onChanged: (value) {
                  setState(() {
                    _kewarganegaraan = value;
                  });
                },
                validator: (value) {
                  if (value == null || value.isEmpty) {
                    return 'Harap masukkan kewarganegaraan';
                  }
                  return null;
                },
              ),
              const SizedBox(height: 25),
              ElevatedButton(
                onPressed: _submitForm,
                child: const Text('Daftar'),
                style: ElevatedButton.styleFrom(
                  primary: const Color(0xFF4C53A5),
                  onPrimary: Colors.white,
                  padding: const EdgeInsets.symmetric(vertical: 20),
                  textStyle: const TextStyle(fontSize: 18),
                  shape: RoundedRectangleBorder(
                    borderRadius: BorderRadius.circular(30),
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

class QueueNumberPage extends StatelessWidget {
  final int nomorAntrian;
  final String namaLengkap;
  final String poliTujuan;
  final String dokter; // Add doctor parameter

  const QueueNumberPage({
    Key? key,
    required this.nomorAntrian,
    required this.namaLengkap,
    required this.poliTujuan,
    required this.dokter, // Initialize doctor parameter
  }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Color(0xFFF0F0F0),
      appBar: AppBar(
        title: const Text('Nomor Antrian'),
        backgroundColor: const Color(0xFF4C53A5),
      ),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: Center(
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              Container(
                width: 200,
                height: 200,
                decoration: BoxDecoration(
                  color: Colors.white,
                  shape: BoxShape.circle,
                  boxShadow: [
                    BoxShadow(
                      color: Colors.grey.withOpacity(0.5),
                      spreadRadius: 5,
                      blurRadius: 7,
                      offset: Offset(0, 3), // changes position of shadow
                    ),
                  ],
                ),
                child: Center(
                  child: Text(
                    '$nomorAntrian',
                    style: TextStyle(fontSize: 80, fontWeight: FontWeight.bold, color: Color(0xFF4C53A5)),
                  ),
                ),
              ),
              const SizedBox(height: 40),
              Text(
                'Nama Lengkap:',
                style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold),
              ),
              const SizedBox(height: 10),
              Text(
                namaLengkap,
                style: TextStyle(fontSize: 18),
              ),
              const SizedBox(height: 20),
              Text(
                'Poli Tujuan:',
                style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold),
              ),
              const SizedBox(height: 10),
              Text(
                poliTujuan,
                style: TextStyle(fontSize: 18),
              ),
              const SizedBox(height: 20),
              Text(
                'Dokter:',
                style: TextStyle(fontSize: 20, fontWeight: FontWeight.bold),
              ),
              const SizedBox(height: 10),
              Text(
                dokter,
                style: TextStyle(fontSize: 18),
              ),
            ],
          ),
        ),
      ),
    );
  }
}

