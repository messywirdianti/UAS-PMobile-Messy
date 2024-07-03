import 'package:flutter/material.dart';
import 'package:rawatjalanapp/screens/poli_gigi.dart';
import 'package:rawatjalanapp/screens/poli_gizi.dart';
import 'package:rawatjalanapp/screens/poli_jantung.dart';
import 'package:rawatjalanapp/screens/poli_kandungan.dart';
import 'package:rawatjalanapp/screens/poli_mata.dart';
import 'package:rawatjalanapp/screens/poli_psikolog.dart';
import 'package:rawatjalanapp/screens/poli_saraf.dart';
import 'package:rawatjalanapp/screens/poli_bedah.dart';

class PoliklinikWidget extends StatefulWidget {
  const PoliklinikWidget({Key? key}) : super(key: key);

  @override
  State<PoliklinikWidget> createState() => _PoliklinikWidgetState();
}

class _PoliklinikWidgetState extends State<PoliklinikWidget> {
  final List<Map<String, String>> poliklinikList = [
    {"name": "Poli Jantung", "image": "assets/images/jantung.png"},
    {"name": "Poli Bedah", "image": "assets/images/bedah.png"},
    {"name": "Poli Mata", "image": "assets/images/mata.png"},
    {"name": "Poli Gigi", "image": "assets/images/gigi.png"},
    {"name": "Poli Kandungan", "image": "assets/images/kandungan.png"},
    {"name": "Poli Gizi", "image": "assets/images/gizi.png"},
    {"name": "Poli Psikolog", "image": "assets/images/psikolog.png"},
    {"name": "Poli Saraf", "image": "assets/images/saraf.png"},
  ];

  void navigateToPage(String poliName) {
    switch (poliName) {
      case "Poli Jantung":
        Navigator.push(
          context,
          MaterialPageRoute(builder: (context) => PoliJantung()),
        );
        break;
      case "Poli Bedah":
        Navigator.push(
          context,
          MaterialPageRoute(builder: (context) => PoliBedah()),
        );
        break;
      case "Poli Mata":
        Navigator.push(
          context,
          MaterialPageRoute(builder: (context) => PoliMata()),
        );
        break;
      case "Poli Gigi":
        Navigator.push(
          context,
          MaterialPageRoute(builder: (context) => PoliGigi()),
        );
        break;
      case "Poli Kandungan":
        Navigator.push(
          context,
          MaterialPageRoute(builder: (context) => PoliKandungan()),
        );
        break;
      case "Poli Gizi":
        Navigator.push(
          context,
          MaterialPageRoute(builder: (context) => PoliGizi()),
        );
        break;
      case "Poli Psikolog":
        Navigator.push(
          context,
          MaterialPageRoute(builder: (context) => PoliPsikolog()),
        );
        break;
      case "Poli Saraf":
        Navigator.push(
          context,
          MaterialPageRoute(builder: (context) => PoliSaraf()),
        );
        break;
      default:
        break;
    }
  }

  @override
  Widget build(BuildContext context) {
    return SingleChildScrollView(
      scrollDirection: Axis.horizontal,
      child: Row(
        children: poliklinikList.map((poli) {
          return GestureDetector(
            onTap: () => navigateToPage(poli["name"]!),
            child: Container(
              margin: EdgeInsets.symmetric(horizontal: 10),
              padding: EdgeInsets.symmetric(vertical: 5, horizontal: 10),
              decoration: BoxDecoration(
                color: Colors.white,
                borderRadius: BorderRadius.circular(20),
              ),
              child: Row(
                crossAxisAlignment: CrossAxisAlignment.center,
                children: [
                  Image.asset(
                    poli["image"]!,
                    width: 40,
                    height: 40,
                  ),
                  SizedBox(width: 10),
                  Text(
                    poli["name"]!,
                    style: TextStyle(
                      fontWeight: FontWeight.bold,
                      fontSize: 17,
                      color: Color(0xFF4C53A5),
                    ),
                  ),
                ],
              ),
            ),
          );
        }).toList(),
      ),
    );
  }
}
