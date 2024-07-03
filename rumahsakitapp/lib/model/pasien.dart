class Pasien {
  final String namaPengguna;
  final String noKTP;
  final String jekel;
  final String tempatLahir;
  final String tanggalLahir;
  final String noBPJS;
  final String noHp;
  final String email;
  final String alamat;

  Pasien({
    required this.namaPengguna,
    required this.noKTP,
    required this.jekel,
    required this.tempatLahir,
    required this.tanggalLahir,
    required this.noBPJS,
    required this.noHp,
    required this.email,
    required this.alamat,
  });

  Map<String, dynamic> toJson() {
    return {
      'namaPengguna': namaPengguna,
      'noKTP': noKTP,
      'jekel': jekel,
      'tempatLahir': tempatLahir,
      'tanggalLahir': tanggalLahir,
      'noBPJS': noBPJS,
      'noHp': noHp,
      'email': email,
      'alamat': alamat,
    };
  }
}
