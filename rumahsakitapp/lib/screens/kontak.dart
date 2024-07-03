import 'package:flutter/material.dart';
import 'package:url_launcher/url_launcher.dart';

class Kontak extends StatelessWidget {
  const Kontak({super.key});

  void _launchURL(String url) async {
    if (await canLaunch(url)) {
      await launch(url);
    } else {
      throw 'Could not launch $url';
    }
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Kontak'),
        backgroundColor: const Color(0xFF4C53A5),
      ),
      body: Padding(
        padding: const EdgeInsets.all(16.0),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            _buildContactCard(
              icon: Icons.phone,
              title: 'Call Center',
              subtitle: '123-456-789',
              onTap: () => _launchURL('tel:123-456-789'),
            ),
            const SizedBox(height: 10),
            _buildContactCard(
              icon: Icons.whatsapp,
              title: 'WhatsApp',
              subtitle: '+62 812-3456-7890',
              onTap: () => _launchURL('https://wa.me/6281234567890'),
            ),
            const SizedBox(height: 10),
            _buildContactCard(
              icon: Icons.email,
              title: 'Email',
              subtitle: 'contact@hospital.com',
              onTap: () => _launchURL('mailto:contact@hospital.com'),
            ),
            const SizedBox(height: 10),
            _buildContactCard(
              icon: Icons.location_on,
              title: 'Alamat',
              subtitle: 'Jl. Kesehatan No. 123, Kota Sehat',
              onTap: () {},
            ),
          ],
        ),
      ),
    );
  }

  Widget _buildContactCard({
    required IconData icon,
    required String title,
    required String subtitle,
    required VoidCallback onTap,
  }) {
    return Card(
      shape: RoundedRectangleBorder(
        borderRadius: BorderRadius.circular(15),
      ),
      elevation: 4,
      child: ListTile(
        leading: CircleAvatar(
          backgroundColor: const Color(0xFF4C53A5),
          child: Icon(icon, color: Colors.white),
        ),
        title: Text(title, style: const TextStyle(fontWeight: FontWeight.bold)),
        subtitle: Text(subtitle),
        onTap: onTap,
      ),
    );
  }
}

void main() {
  runApp(const MaterialApp(
    home: Kontak(),
  ));
}
