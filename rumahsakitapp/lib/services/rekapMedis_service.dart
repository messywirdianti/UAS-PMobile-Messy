import 'dart:convert';
import 'package:http/http.dart' as http;
import 'package:rawatjalanapp/model/rekap_medis.dart';

class RekapMedisService {
  Future<List<RekapMedisModel>> fetchRekapMedis() async {
    final response = await http.get(Uri.parse('https://ibex-stunning-oarfish.ngrok-free.app/api/rekapMedis'));

    if (response.statusCode == 200) {
      List jsonResponse = json.decode(response.body);
      return jsonResponse.map((data) => RekapMedisModel.fromJson(data)).toList();
    } else {
      throw Exception('Failed to load rekap medis');
    }
  }
}
