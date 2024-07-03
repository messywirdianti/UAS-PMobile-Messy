import 'package:flutter/material.dart';
import 'package:rawatjalanapp/model/rekap_medis.dart';

class RekapMedisPage extends StatelessWidget {
  final List<RekapMedisModel> rekapMedisList;

  const RekapMedisPage({Key? key, required this.rekapMedisList}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Rekap Medis'),
        backgroundColor: const Color(0xFF4C53A5),
        actions: [
          IconButton(
            icon: const Icon(Icons.add),
            onPressed: () {
              Navigator.pushNamed(context, '/addRekapMedis');
            },
          ),
        ],
      ),
      body: ListView.builder(
        itemCount: rekapMedisList.length,
        itemBuilder: (context, index) {
          final rekapMedis = rekapMedisList[index];
          return Card(
            margin: const EdgeInsets.all(10.0),
            child: ListTile(
              title: Text(rekapMedis.keluhan),
              subtitle: Text(rekapMedis.diagnosa),
            ),
          );
        },
      ),
    );
  }
}
