import 'package:flutter/material.dart';
import 'package:rawatjalanapp/widgets/home.dart';

class HomeScreen extends StatefulWidget {
  const HomeScreen({super.key});

  @override
  State<HomeScreen> createState() => _HomeScreenState();
}

class _HomeScreenState extends State<HomeScreen> {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: ListView(
        children:[
        const Home(),
          Container(
            height: 500,
            padding: const EdgeInsets.only(top: 15),
            decoration: const BoxDecoration(
              color: Color(0xFFEDECC2),
              borderRadius: BorderRadius.only(
                topLeft: Radius.circular(35),
                topRight: Radius.circular(35),
              ),
            ),
            child: Column(
              children: [
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
                      Container(
                        margin: const EdgeInsets.only(left: 5),
                        height: 50,
                        width: 300,
                        child: TextFormField(
                          decoration: const InputDecoration(
                            border: InputBorder.none,
                            hintText: "Search here...",
                          ),
                        ),
                      ),

                    ],
                  ),
                ),
              ],
            ),
          ),
      ],
      ),
    );
  }
}



