import 'package:flutter/material.dart';
import 'package:rawatjalanapp/model/rekap_medis.dart';
import 'package:rawatjalanapp/screens/Apotik.dart';
import 'package:rawatjalanapp/screens/Daftar_online.dart';
import 'package:rawatjalanapp/screens/add_rekapMedis.dart';
import 'package:rawatjalanapp/screens/jadwal_dokter.dart';
import 'package:rawatjalanapp/screens/pasien.dart';
import 'package:rawatjalanapp/screens/rekap_medis.dart';
import 'package:rawatjalanapp/screens/kontak.dart';

import '../model/pasien.dart';
import 'Poliklinik.dart';

class Home extends StatelessWidget {
  const Home({super.key});

  @override
  Widget build(BuildContext context) {

    List<RekapMedisModel> myrekapMedisList = [];
    return Scaffold(
      appBar: AppBar(
        backgroundColor: Colors.white,
        elevation: 0,
        leading: const Icon(
          Icons.sort,
          size: 30,
          color: Color(0xFF4C53A5),
        ),
        title: const Text(
          "Rawat Jalan",
          style: TextStyle(
            fontSize: 23,
            fontWeight: FontWeight.bold,
            color: Color(0xFF4C53A5),
          ),
        ),
        actions: [
          IconButton(
            onPressed: () {
              // Aksi yang ingin dilakukan saat ikon profil diklik
            },
            icon: CircleAvatar(
              backgroundImage: AssetImage('assets/images/ichi.jpg'), // Ganti dengan path gambar profil Anda
            ),
          ),
          const SizedBox(width: 10),
        ],
      ),
      body: SingleChildScrollView(
        child: Padding(
          padding: const EdgeInsets.all(25),
          child: Column(
            children: [
              Container(
                padding: const EdgeInsets.only(top: 15),
                decoration: const BoxDecoration(
                  color: Color(0xFFEDECF2),
                  borderRadius: BorderRadius.only(
                    topLeft: Radius.circular(35),
                    topRight: Radius.circular(35),
                  ),
                ),
                child: Column(
                  children: [
                    // search widget
                    Container(
                      margin: const EdgeInsets.symmetric(horizontal: 15),
                      padding: const EdgeInsets.symmetric(horizontal: 15),
                      height: 50,
                      decoration: BoxDecoration(
                        color: Colors.white38,
                        borderRadius: BorderRadius.circular(30),
                      ),
                      child: Row(
                        children: [
                          Expanded(
                            child: TextFormField(
                              decoration: const InputDecoration(
                                border: InputBorder.none,
                                hintText: "Temukan Informasi..",
                              ),
                            ),
                          ),
                          const Icon(Icons.search),
                        ],
                      ),
                    ),
                    // Tambahkan konten lain di sini
                    Container(
                      alignment: Alignment.centerLeft,
                      margin: const EdgeInsets.symmetric(
                        vertical: 20,
                        horizontal: 10,
                      ),
                      child: const Text(
                        "PoliKlinik",
                        style: TextStyle(
                          fontSize: 25,
                          fontWeight: FontWeight.bold,
                          color: Color(0xff4c53a5),
                        ),
                      ),
                    ),
                    //PoliKlinik
                    const PoliklinikWidget(),
                    const SizedBox(height: 20),
                    Container(
                      alignment: Alignment.centerLeft,
                      margin: const EdgeInsets.symmetric(
                        vertical: 20,
                        horizontal: 10,
                      ),
                      child: const Text(
                        "Menu App",
                        style: TextStyle(
                          fontSize: 25,
                          fontWeight: FontWeight.bold,
                          color: Color(0xFF4C53A5),
                        ),
                      ),
                    ),
                    Padding(
                      padding: const EdgeInsets.all(12.0),
                      child: Center(
                        child: Column(
                          children: [
                            GridView.count(
                              shrinkWrap: true,
                              crossAxisCount: 2,
                              crossAxisSpacing: 20.0,
                              mainAxisSpacing: 20.0,
                              physics: NeverScrollableScrollPhysics(), // Disable GridView scrolling
                              children: [
                                InkWell(
                                  onTap: () {
                                    Navigator.push(
                                      context,
                                      MaterialPageRoute(builder: (context) => const DaftarOnline()),
                                    );
                                  },
                                  child: Card(
                                    color: Colors.white,
                                    elevation: 2.0,
                                    shape: RoundedRectangleBorder(
                                      borderRadius: BorderRadius.circular(8.0),
                                    ),
                                    child: Center(
                                      child: Padding(
                                        padding: const EdgeInsets.all(8.0),
                                        child: Column(
                                          children: [
                                            Image.asset("assets/images/Daftar online.png", width: 64.0),
                                            const SizedBox(height: 10.0),
                                            const Text("Daftar Online", style: TextStyle(
                                              color: Color(0xFF4C53A5),
                                              fontWeight: FontWeight.bold,
                                              fontSize: 20.0,
                                            )),
                                          ],
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                                InkWell(
                                  onTap: () {
                                    Navigator.push(
                                      context,
                                      MaterialPageRoute(builder: (context) => PasienScreen()),
                                    );
                                  },
                                  child: Card(
                                    color: Colors.white,
                                    elevation: 2.0,
                                    shape: RoundedRectangleBorder(
                                      borderRadius: BorderRadius.circular(8.0),
                                    ),
                                    child: Center(
                                      child: Padding(
                                        padding: const EdgeInsets.all(8.0),
                                        child: Column(
                                          children: [
                                            Image.asset("assets/images/pasien.png", width: 64.0),
                                            const SizedBox(height: 10.0),
                                            const Text("Pasien", style: TextStyle(
                                              color: Color(0xFF4C53A5),
                                              fontWeight: FontWeight.bold,
                                              fontSize: 20.0,
                                            )),
                                          ],
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                                InkWell(
                                  onTap: () {
                                    Navigator.push(
                                      context,
                                      MaterialPageRoute(builder: (context) => const JadwalDokter()),
                                    );
                                  },
                                  child: Card(
                                    color: Colors.white,
                                    elevation: 2.0,
                                    shape: RoundedRectangleBorder(
                                      borderRadius: BorderRadius.circular(8.0),
                                    ),
                                    child: Center(
                                      child: Padding(
                                        padding: const EdgeInsets.all(8.0),
                                        child: Column(
                                          children: [
                                            Image.asset("assets/images/Jadwal Dokter.png", width: 64.0),
                                            const SizedBox(height: 10.0),
                                            const Text("Jadwal Dokter", style: TextStyle(
                                              color: Color(0xFF4C53A5),
                                              fontWeight: FontWeight.bold,
                                              fontSize: 20.0,
                                            )),
                                          ],
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                                InkWell(
                                  onTap: () {
                                    Navigator.push(
                                      context,
                                      MaterialPageRoute(builder: (context) => RekapMedisPage(rekapMedisList: myrekapMedisList),),
                                    );
                                  },
                                  child: Card(
                                    color: Colors.white,
                                    elevation: 2.0,
                                    shape: RoundedRectangleBorder(
                                      borderRadius: BorderRadius.circular(8.0),
                                    ),
                                    child: Center(
                                      child: Padding(
                                        padding: const EdgeInsets.all(8.0),
                                        child: Column(
                                          children: [
                                            Image.asset("assets/images/notes.png", width: 64.0),
                                            const SizedBox(height: 10.0),
                                            const Text("Rekap Medis", style: TextStyle(
                                              color: Color(0xFF4C53A5),
                                              fontWeight: FontWeight.bold,
                                              fontSize: 20.0,
                                            )),
                                          ],
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                                InkWell(
                                  onTap: () {
                                    Navigator.push(
                                      context,
                                      MaterialPageRoute(builder: (context) => const Apotik()),
                                    );
                                  },
                                  child: Card(
                                    color: Colors.white,
                                    elevation: 2.0,
                                    shape: RoundedRectangleBorder(
                                      borderRadius: BorderRadius.circular(8.0),
                                    ),
                                    child: Center(
                                      child: Padding(
                                        padding: const EdgeInsets.all(8.0),
                                        child: Column(
                                          children: [
                                            Image.asset("assets/images/apotik.png", width: 64.0),
                                            const SizedBox(height: 10.0),
                                            const Text("Riwayat Obat", style: TextStyle(
                                              color: Color(0xFF4C53A5),
                                              fontWeight: FontWeight.bold,
                                              fontSize: 20.0,
                                            )),
                                          ],
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                                InkWell(
                                  onTap: () {
                                    Navigator.push(
                                      context,
                                      MaterialPageRoute(builder: (context) => const Kontak()),
                                    );
                                  },
                                  child: Card(
                                    color: Colors.white,
                                    elevation: 2.0,
                                    shape: RoundedRectangleBorder(
                                      borderRadius: BorderRadius.circular(8.0),
                                    ),
                                    child: Center(
                                      child: Padding(
                                        padding: const EdgeInsets.all(8.0),
                                        child: Column(
                                          children: [
                                            Image.asset("assets/images/hospital.png", width: 64.0),
                                            const SizedBox(height: 10.0),
                                            const Text("Kontak", style: TextStyle(
                                              color: Color(0xFF4C53A5),
                                              fontWeight: FontWeight.bold,
                                              fontSize: 20.0,
                                            )),
                                          ],
                                        ),
                                      ),
                                    ),
                                  ),
                                ),


                              ],
                            ),
                            Container(
                              height: 400,
                              color: const Color(0xFFEDECF2), // Contoh konten tambahan
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
      ),
    );
  }
}
