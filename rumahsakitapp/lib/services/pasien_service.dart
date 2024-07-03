import 'dart:convert';
import 'package:http/http.dart' as http;
import 'package:rawatjalanapp/model/pasien.dart';

class PasienService {
  Future<bool> addPasien(Pasien pasien) async {
    final url = 'https://ibex-stunning-oarfish.ngrok-free.app/api/pasien'; // Ganti dengan endpoint API Anda
    try {
      final response = await http.post(
        Uri.parse(url),
        headers: {
          'Content-Type': 'application/json',
        },
        body: json.encode(pasien.toJson()),
      );

      print('Server response: ${response.statusCode} ${response.body}');

      if (response.statusCode == 200) {
        return true;
      } else {
        return false;
      }
    } catch (e) {
      print('Error sending data to server: $e');
      return false;
    }
  }
}
