class RekapMedisModel {
  final String tanggalKunjungan;
  final String keluhan;
  final String diagnosa;
  final String tekananDarah;
  final String suhuTubuh;
  final String beratBadan;
  final String tinggiBadan;

  RekapMedisModel({
    required this.tanggalKunjungan,
    required this.keluhan,
    required this.diagnosa,
    required this.tekananDarah,
    required this.suhuTubuh,
    required this.beratBadan,
    required this.tinggiBadan,
  });

  factory RekapMedisModel.fromJson(Map<String, dynamic> json) {
    return RekapMedisModel(
      tanggalKunjungan: json['tanggalKunjungan'],
      keluhan: json['keluhan'],
      diagnosa: json['diagnosa'],
      tekananDarah: json['tekananDarah'],
      suhuTubuh: json['suhuTubuh'],
      beratBadan: json['beratBadan'],
      tinggiBadan: json['tinggiBadan'],
    );
  }
}
