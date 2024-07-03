import 'package:animated_notch_bottom_bar/animated_notch_bottom_bar/animated_notch_bottom_bar.dart';
import 'package:flutter/material.dart';
import 'package:rawatjalanapp/screens/welcome_Screen.dart';
import 'package:rawatjalanapp/widgets/Profil.dart';
import 'package:rawatjalanapp/widgets/Setting.dart';
import 'package:rawatjalanapp/widgets/home.dart';
import 'dart:io';
import 'package:rawatjalanapp/services/Api_service.dart';
import 'package:rawatjalanapp/screens/rekap_medis.dart';
import 'package:rawatjalanapp/screens/add_rekapMedis.dart';
import 'package:rawatjalanapp/services/rekapMedis_service.dart';
import 'package:rawatjalanapp/model/rekap_medis.dart';
void main() {
  HttpOverrides.global = MyHttpOverrides();
  runApp(const MyApp());
}

class MyHttpOverrides extends HttpOverrides {
  @override
  HttpClient createHttpClient(SecurityContext? context) {
    return super.createHttpClient(context)
      ..badCertificateCallback = (X509Certificate cert, String host, int port) => true;
  }
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: const WelcomeScreen(),
      theme: ThemeData(
        primarySwatch: Colors.blue,
      ),
      routes: {
        '/navbar': (context) => const Navbar(),
        '/addRekapMedis': (context) => const AddRekapMedisPage(),
      },
    );
  }
}

class Navbar extends StatefulWidget {
  const Navbar({super.key});

  @override
  State<Navbar> createState() => _NavbarState();
}

class _NavbarState extends State<Navbar> {
  final _pageController = PageController(initialPage: 0);
  final NotchBottomBarController _controller = NotchBottomBarController(index: 0);

  int maxCount = 4;

  @override
  void dispose() {
    _pageController.dispose();
    super.dispose();
  }

  @override
  Widget build(BuildContext context) {
    final List<Widget> bottomBarPages = [
      Home(),
      Profil(),
      Setting(),
      FutureBuilder<List<RekapMedisModel>>(
        future: RekapMedisService().fetchRekapMedis(),
        builder: (context, snapshot) {
          if (snapshot.connectionState == ConnectionState.waiting) {
            return const Center(child: CircularProgressIndicator());
          } else if (snapshot.hasError) {
            return const Center(child: Text('Failed to load data'));
          } else {
            return RekapMedisPage(rekapMedisList: snapshot.data!);
          }
        },
      ),
    ];

    return Scaffold(
      body: PageView(
        controller: _pageController,
        physics: const NeverScrollableScrollPhysics(),
        children: List.generate(bottomBarPages.length, (index) => bottomBarPages[index]),
      ),
      extendBody: true,
      bottomNavigationBar: (bottomBarPages.length <= maxCount)
          ? AnimatedNotchBottomBar(
        notchBottomBarController: _controller,
        color: const Color(0xFF4C53A5),
        showLabel: true,
        notchColor: const Color.fromRGBO(255, 255, 255, 1.0),
        removeMargins: false,
        bottomBarWidth: 500,
        showShadow: true,
        durationInMilliSeconds: 150,
        itemLabelStyle: const TextStyle(fontSize: 10, color: Color.fromRGBO(255, 255, 255, 1.0)),
        bottomBarItems: const [
          BottomBarItem(
            inActiveItem: Icon(
              Icons.home_filled,
              color: Colors.white,
            ),
            activeItem: Icon(
              Icons.home_filled,
              color: Color(0xFF4C53A5),
            ),
            itemLabel: 'Home',
          ),
          BottomBarItem(
            inActiveItem: Icon(
              Icons.supervised_user_circle,
              color: Colors.white,
            ),
            activeItem: Icon(
              Icons.supervised_user_circle,
              color: Color(0xFF4C53A5),
            ),
            itemLabel: 'Profil',
          ),
          BottomBarItem(
            inActiveItem: Icon(
              Icons.settings,
              color: Colors.white,
            ),
            activeItem: Icon(
              Icons.settings,
              color: Color(0xFF4C53A5),
            ),
            itemLabel: 'Setting',
          ),
          // BottomBarItem(
          //   inActiveItem: Icon(
          //     Icons.medical_services,
          //     color: Colors.white,
          //   ),
          //   activeItem: Icon(
          //     Icons.medical_services,
          //     color: Color(0xFF4C53A5),
          //   ),
          //   itemLabel: 'Rekap Medis',
          // ),
        ],
        onTap: (index) {
          _pageController.jumpToPage(index);
        },
      )
          : null,
    );
  }
}
