<?php

/*
 * This code is a  example to php madrid meeting group talk
 * on January 2015.
 *
 * Please do not take this as production code
 *
 * Copyright (c) Daniel González
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Daniel González <daniel@desarrolla2.com>
 */

namespace Desarrolla2\RS\Repository;

/**
 * MarvelCharactersRepository
 */
class MarvelCharactersRepository
{

  /**
   * @param $id
   *
   * @return false|array
   */
  public function getCharacter($id){
    $characters = $this->getCharacters();
    if (isset($characters[$id])){
      return $characters[$id];
    }

    return false;
  }
    /**
     * @return array
     */
    public function getCharacters()
    {
        return [
  1009144 => 
  [
    'name' => 'A.I.M.',
    'description' => 'AIM is a terrorist organization bent on destroying the world.',
    'series' => 
    [
      0 => 13082,
      1 => 354,
      2 => 1991,
      3 => 227,
      4 => 271,
      5 => 1997,
      6 => 3743,
      7 => 8842,
      8 => 9718,
      9 => 1506,
      10 => 189,
      11 => 1468,
      12 => 1494,
      13 => 3300,
      14 => 222,
      15 => 2076,
      16 => 2079,
      17 => 2725,
      18 => 13213,
      19 => 2258,
    ],
    'img' => '.',
  ],
  1009146 => 
  [
    'name' => 'Abomination (Emil Blonsky)',
    'description' => 'Formerly known as Emil Blonsky, a spy of Soviet Yugoslavian origin working for the KGB, the Abomination gained his powers after receiving a dose of gamma radiation similar to that which transformed Bruce Banner into the incredible Hulk.',
    'series' => 
    [
      0 => 354,
      1 => 158,
      2 => 378,
      3 => 1806,
      4 => 3374,
      5 => 6831,
      6 => 924,
      7 => 2021,
      8 => 465,
      9 => 2983,
      10 => 212,
      11 => 244,
      12 => 8842,
      13 => 2572,
      14 => 977,
      15 => 2423,
      16 => 3722,
      17 => 2437,
      18 => 1671,
      19 => 2301,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/50/4ce18691cbf04.jpg',
  ],
  1009148 => 
  [
    'name' => 'Absorbing Man',
    'description' => '',
    'series' => 
    [
      0 => 9086,
      1 => 1988,
      2 => 1997,
      3 => 3745,
      4 => 13691,
      5 => 13857,
      6 => 13827,
      7 => 2021,
      8 => 9924,
      9 => 2032,
      10 => 926,
      11 => 1959,
      12 => 14492,
      13 => 14491,
      14 => 1588,
      15 => 2301,
      16 => 1866,
      17 => 2059,
      18 => 2431,
      19 => 6796,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/b0/5269678709fb7.jpg',
  ],
  1009149 => 
  [
    'name' => 'Abyss',
    'description' => '',
    'series' => 
    [
      0 => 2258,
      1 => 2104,
      2 => 1583,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/30/535feab462a64.jpg',
  ],
  1009150 => 
  [
    'name' => 'Agent Zero',
    'description' => '',
    'series' => 
    [
      0 => 869,
      1 => 1478,
      2 => 3648,
      3 => 2262,
      4 => 84,
      5 => 3643,
      6 => 2265,
      7 => 3637,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4c0042121d790.jpg',
  ],
  1009151 => 
  [
    'name' => 'Amiko',
    'description' => '',
    'series' => 
    [
      0 => 2258,
      1 => 2262,
    ],
    'img' => false,
  ],
  1009152 => 
  [
    'name' => 'Ancient One',
    'description' => '',
    'series' => 
    [
      0 => 3741,
      1 => 1468,
      2 => 2076,
      3 => 3648,
    ],
    'img' => '.',
  ],
  1009153 => 
  [
    'name' => 'Angel (Warren Worthington III)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009154 => 
  [
    'name' => 'Annihilus',
    'description' => '',
    'series' => 
    [
      0 => 1263,
      1 => 421,
      2 => 2123,
      3 => 2121,
      4 => 2012,
      5 => 1424,
      6 => 13577,
      7 => 3719,
      8 => 49,
      9 => 2275,
      10 => 1437,
      11 => 2059,
      12 => 2431,
      13 => 2702,
      14 => 2093,
      15 => 3648,
      16 => 2262,
      17 => 5761,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/f0/528d31f20a2f6.jpg',
  ],
  1009156 => 
  [
    'name' => 'Apocalypse',
    'description' => '',
    'series' => 
    [
      0 => 1995,
      1 => 4002,
      2 => 14400,
      3 => 2021,
      4 => 8138,
      5 => 8140,
      6 => 787,
      7 => 2057,
      8 => 9976,
      9 => 2258,
      10 => 1075,
      11 => 2425,
      12 => 2262,
      13 => 84,
      14 => 2098,
      15 => 6689,
      16 => 5068,
      17 => 3633,
      18 => 2265,
      19 => 3640,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/e0/526166076a1d0.jpg',
  ],
  1009157 => 
  [
    'name' => 'Spider-Girl (Anya Corazon)',
    'description' => ' ',
    'series' => 
    [
      0 => 454,
      1 => 13250,
      2 => 832,
      3 => 13602,
      4 => 9856,
      5 => 14655,
      6 => 10439,
      7 => 13862,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/10/528d369de3e4f.jpg',
  ],
  1009158 => 
  [
    'name' => 'Arcade',
    'description' => '',
    'series' => 
    [
      0 => 459,
      1 => 3751,
      2 => 2011,
      3 => 1440,
      4 => 3460,
      5 => 3459,
      6 => 2258,
      7 => 1723,
      8 => 3633,
      9 => 2265,
      10 => 1774,
      11 => 2102,
      12 => 1685,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/a0/4c0042091ab69.jpg',
  ],
  1009159 => 
  [
    'name' => 'Archangel',
    'description' => '',
    'series' => 
    [
      0 => 3614,
      1 => 2114,
      2 => 2116,
      3 => 744,
      4 => 354,
      5 => 1737,
      6 => 1990,
      7 => 158,
      8 => 3626,
      9 => 1995,
      10 => 4002,
      11 => 7,
      12 => 8,
      13 => 485,
      14 => 251,
      15 => 690,
      16 => 175,
      17 => 105,
      18 => 2001,
      19 => 1720,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/03/526165ed93180.jpg',
  ],
  1009160 => 
  [
    'name' => 'Arclight',
    'description' => '',
    'series' => 
    [
      0 => 8140,
      1 => 2258,
      2 => 2098,
      3 => 92,
      4 => 343,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/f0/4c0042067fd8b.jpg',
  ],
  1009161 => 
  [
    'name' => 'Artiee',
    'description' => '',
    'series' => 
    [
      0 => 454,
    ],
    'img' => false,
  ],
  1009162 => 
  [
    'name' => 'Askew-Tronics',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009163 => 
  [
    'name' => 'Aurora',
    'description' => '',
    'series' => 
    [
      0 => 3614,
      1 => 2116,
      2 => 13907,
      3 => 1983,
      4 => 13260,
      5 => 1440,
      6 => 2258,
      7 => 1723,
      8 => 163,
      9 => 138,
      10 => 3653,
      11 => 2262,
      12 => 2098,
      13 => 1583,
    ],
    'img' => '.',
  ],
  1009164 => 
  [
    'name' => 'Avalanche',
    'description' => '',
    'series' => 
    [
      0 => 1988,
      1 => 1995,
      2 => 2258,
      3 => 3648,
      4 => 2098,
      5 => 6689,
      6 => 2100,
      7 => 1327,
      8 => 1318,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/10/4c0042010d383.jpg',
  ],
  1009165 => 
  [
    'name' => 'Avengers',
    'description' => 'Earth\'s Mightiest Heroes joined forces to take on threats that were too big for any one hero to tackle. With a roster that has included Captain America, Iron Man, Ant-Man, Hulk, Thor, Wasp and dozens more over the years, the Avengers have come to be regarded as Earth\'s No. 1 team.',
    'series' => 
    [
      0 => 15331,
      1 => 13896,
      2 => 672,
      3 => 13383,
      4 => 2116,
      5 => 454,
      6 => 2984,
      7 => 1489,
      8 => 744,
      9 => 10030,
      10 => 10031,
      11 => 9085,
      12 => 1991,
      13 => 3621,
      14 => 354,
      15 => 10035,
      16 => 9859,
      17 => 9086,
      18 => 1988,
      19 => 15373,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/20/5102c774ebae7.jpg',
  ],
  1009166 => 
  [
    'name' => 'Lenny Balinger',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009167 => 
  [
    'name' => 'Bruce Banner',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009168 => 
  [
    'name' => 'Banshee',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 13588,
      2 => 3751,
      3 => 378,
      4 => 1806,
      5 => 2011,
      6 => 1440,
      7 => 3459,
      8 => 3460,
      9 => 14485,
      10 => 14486,
      11 => 1364,
      12 => 249,
      13 => 1689,
      14 => 3716,
      15 => 1595,
      16 => 1430,
      17 => 2055,
      18 => 1763,
      19 => 2059,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/03/52740e4619f54.jpg',
  ],
  1009169 => 
  [
    'name' => 'Baron Strucker',
    'description' => '',
    'series' => 
    [
      0 => 485,
      1 => 1996,
      2 => 197,
      3 => 378,
      4 => 1806,
      5 => 1468,
      6 => 2301,
      7 => 1595,
      8 => 8852,
      9 => 5860,
      10 => 6796,
      11 => 2076,
      12 => 2258,
      13 => 2088,
    ],
    'img' => '.',
  ],
  1009170 => 
  [
    'name' => 'Baron Zemo (Heinrich Zemo)',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 1988,
      2 => 832,
      3 => 485,
      4 => 197,
      5 => 1612,
      6 => 1613,
      7 => 378,
      8 => 1806,
      9 => 1614,
      10 => 1390,
      11 => 1494,
      12 => 2079,
      13 => 18527,
      14 => 14304,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/60/4c0041f84c9fe.jpg',
  ],
  1009171 => 
  [
    'name' => 'Bastion',
    'description' => '',
    'series' => 
    [
      0 => 1995,
      1 => 2011,
      2 => 2258,
      3 => 6688,
      4 => 2098,
      5 => 3633,
      6 => 2265,
      7 => 3637,
      8 => 9359,
      9 => 13833,
      10 => 9808,
      11 => 13832,
      12 => 6430,
      13 => 3284,
    ],
    'img' => '.',
  ],
  1009172 => 
  [
    'name' => 'Batroc the Leaper',
    'description' => '',
    'series' => 
    [
      0 => 13194,
      1 => 1997,
      2 => 1996,
      3 => 13504,
      4 => 2005,
      5 => 13787,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/80/4ce59eb840da5.gif',
  ],
  1009173 => 
  [
    'name' => 'Battering Ram',
    'description' => '',
    'series' => 
    [
      0 => 3633,
      1 => 88,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4c002e0305708.gif',
  ],
  1009174 => 
  [
    'name' => 'Beak',
    'description' => '',
    'series' => 
    [
      0 => 1807,
      1 => 2281,
      2 => 1166,
      3 => 56,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/90/4c0040b8329ad.jpg',
  ],
  1009175 => 
  [
    'name' => 'Beast',
    'description' => '',
    'series' => 
    [
      0 => 16450,
      1 => 16449,
      2 => 2116,
      3 => 6666,
      4 => 18142,
      5 => 744,
      6 => 7576,
      7 => 1464,
      8 => 1298,
      9 => 1422,
      10 => 1485,
      11 => 5055,
      12 => 354,
      13 => 1991,
      14 => 9085,
      15 => 1988,
      16 => 13320,
      17 => 1340,
      18 => 1496,
      19 => 1737,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/80/511a79a0451a3.jpg',
  ],
  1009176 => 
  [
    'name' => 'Becatron',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009177 => 
  [
    'name' => 'Bedlam',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1737,
      2 => 1995,
      3 => 2060,
      4 => 581,
      5 => 4020,
    ],
    'img' => false,
  ],
  1009178 => 
  [
    'name' => 'Beef',
    'description' => '',
    'series' => 
    [
      0 => 2258,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4c002e0305708.gif',
  ],
  1009179 => 
  [
    'name' => 'Beetle (Abner Jenkins)',
    'description' => '',
    'series' => 
    [
      0 => 2121,
      1 => 2254,
      2 => 2572,
      3 => 2029,
      4 => 1846,
      5 => 3715,
      6 => 2271,
      7 => 2296,
      8 => 2093,
    ],
    'img' => false,
  ],
  1009180 => 
  [
    'name' => 'Beta-Ray Bill',
    'description' => '',
    'series' => 
    [
      0 => 13025,
      1 => 14818,
      2 => 1945,
      3 => 13604,
      4 => 2083,
      5 => 581,
      6 => 10491,
      7 => 223,
      8 => 12850,
      9 => 11981,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/90/52602f3e88d25.jpg',
  ],
  1009181 => 
  [
    'name' => 'Big Wheel',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 17554,
    ],
    'img' => '.',
  ],
  1009182 => 
  [
    'name' => 'Bishop',
    'description' => '',
    'series' => 
    [
      0 => 3614,
      1 => 1816,
      2 => 3626,
      3 => 3753,
      4 => 784,
      5 => 1726,
      6 => 4002,
      7 => 1995,
      8 => 4059,
      9 => 10105,
      10 => 1110,
      11 => 1965,
      12 => 3874,
      13 => 733,
      14 => 1360,
      15 => 421,
      16 => 1430,
      17 => 2049,
      18 => 8133,
      19 => 915,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/70/52602f4b42d98.jpg',
  ],
  1009183 => 
  [
    'name' => 'Black Bird',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009184 => 
  [
    'name' => 'Black Bolt',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 9086,
      2 => 784,
      3 => 1726,
      4 => 378,
      5 => 1806,
      6 => 2123,
      7 => 2121,
      8 => 421,
      9 => 2445,
      10 => 13440,
      11 => 1812,
      12 => 2027,
      13 => 9347,
      14 => 2039,
      15 => 1866,
      16 => 16451,
      17 => 753,
      18 => 1417,
      19 => 367,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/20/52696929dc721.jpg',
  ],
  1009185 => 
  [
    'name' => 'Black Cat',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 1987,
      2 => 9835,
      3 => 925,
      4 => 12916,
      5 => 14701,
      6 => 14074,
      7 => 823,
      8 => 1375,
      9 => 9311,
      10 => 1121,
      11 => 1966,
      12 => 2700,
      13 => 2039,
      14 => 1696,
      15 => 721,
      16 => 1556,
      17 => 1866,
      18 => 2271,
      19 => 2060,
    ],
    'img' => '.',
  ],
  1009186 => 
  [
    'name' => 'Black Knight (Sir Percy of Scandia)',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 3621,
      2 => 1991,
      3 => 354,
      4 => 1988,
      5 => 1340,
      6 => 1496,
      7 => 1816,
      8 => 2929,
      9 => 158,
      10 => 1679,
      11 => 98,
      12 => 3743,
      13 => 3741,
      14 => 378,
      15 => 1806,
      16 => 2011,
      17 => 2121,
      18 => 2012,
      19 => 2446,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/b0/4ce59ed1590a7.jpg',
  ],
  1009187 => 
  [
    'name' => 'Black Panther',
    'description' => '',
    'series' => 
    [
      0 => 10235,
      1 => 454,
      2 => 2984,
      3 => 744,
      4 => 354,
      5 => 1991,
      6 => 1340,
      7 => 1737,
      8 => 1816,
      9 => 2384,
      10 => 2111,
      11 => 93,
      12 => 9863,
      13 => 158,
      14 => 227,
      15 => 271,
      16 => 13584,
      17 => 98,
      18 => 3627,
      19 => 784,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/60/5261a80a67e7d.jpg',
  ],
  1009188 => 
  [
    'name' => 'Black Tom',
    'description' => '',
    'series' => 
    [
      0 => 3751,
      1 => 13428,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/70/4c0040a736154.jpg',
  ],
  1009189 => 
  [
    'name' => 'Black Widow',
    'description' => '',
    'series' => 
    [
      0 => 7524,
      1 => 6079,
      2 => 6666,
      3 => 1987,
      4 => 354,
      5 => 1991,
      6 => 15373,
      7 => 1340,
      8 => 1737,
      9 => 1816,
      10 => 2384,
      11 => 15305,
      12 => 4864,
      13 => 1945,
      14 => 98,
      15 => 1493,
      16 => 18138,
      17 => 9706,
      18 => 758,
      19 => 1994,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/30/50fecad1f395b.jpg',
  ],
  1009190 => 
  [
    'name' => 'Blackheart',
    'description' => '',
    'series' => 
    [
      0 => 2002,
      1 => 14764,
      2 => 3633,
    ],
    'img' => '.',
  ],
  1009191 => 
  [
    'name' => 'Blade',
    'description' => '',
    'series' => 
    [
      0 => 1123,
      1 => 1249,
      2 => 2931,
      3 => 2236,
      4 => 3741,
      5 => 2039,
      6 => 1697,
      7 => 3718,
      8 => 1712,
      9 => 2060,
      10 => 13669,
      11 => 2084,
      12 => 6058,
      13 => 6024,
      14 => 10522,
      15 => 2089,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/a0/523ca6f2b11e4.jpg',
  ],
  1009195 => 
  [
    'name' => 'Blastaar',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 3061,
      2 => 2121,
      3 => 421,
      4 => 2123,
      5 => 1812,
      6 => 1508,
      7 => 2059,
      8 => 2431,
      9 => 2702,
      10 => 13192,
      11 => 2258,
      12 => 2093,
      13 => 14362,
      14 => 14364,
    ],
    'img' => '.',
  ],
  1009196 => 
  [
    'name' => 'Johnny Blaze',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/50/4c003442a3ea6.jpg',
  ],
  1009197 => 
  [
    'name' => 'Blink',
    'description' => '',
    'series' => 
    [
      0 => 3628,
      1 => 479,
      2 => 1462,
      3 => 1564,
      4 => 1899,
      5 => 2553,
      6 => 154,
      7 => 116,
      8 => 787,
      9 => 2258,
      10 => 2265,
      11 => 3640,
      12 => 2104,
      13 => 2101,
      14 => 1452,
      15 => 1583,
      16 => 1685,
      17 => 6430,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/d0/4ce59eeb38a9a.jpg',
  ],
  1009198 => 
  [
    'name' => 'Blizzard',
    'description' => '',
    'series' => 
    [
      0 => 2029,
      1 => 2572,
      2 => 3716,
      3 => 788,
      4 => 1331,
    ],
    'img' => false,
  ],
  1009199 => 
  [
    'name' => 'Blob',
    'description' => '',
    'series' => 
    [
      0 => 1988,
      1 => 1995,
      2 => 2002,
      3 => 1635,
      4 => 479,
      5 => 154,
      6 => 973,
      7 => 1440,
      8 => 2258,
      9 => 3648,
      10 => 6688,
      11 => 2098,
      12 => 6689,
      13 => 2941,
      14 => 3633,
      15 => 2265,
      16 => 2104,
      17 => 1327,
      18 => 1318,
      19 => 1319,
    ],
    'img' => '.',
  ],
  1009200 => 
  [
    'name' => 'Blockbuster',
    'description' => '',
    'series' => 
    [
      0 => 1996,
      1 => 2056,
      2 => 1658,
      3 => 2083,
      4 => 2716,
      5 => 2258,
      6 => 2098,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/60/4c0040969fa92.jpg',
  ],
  1009201 => 
  [
    'name' => 'Blok',
    'description' => '',
    'series' => 
    [
      0 => 2262,
      1 => 85,
    ],
    'img' => false,
  ],
  1009202 => 
  [
    'name' => 'Bloke',
    'description' => '',
    'series' => 
    [
      0 => 3633,
      1 => 88,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/60/4c00409415b3b.jpg',
  ],
  1009203 => 
  [
    'name' => 'Bloodscream',
    'description' => '',
    'series' => 
    [
      0 => 2262,
      1 => 3637,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/e0/4c7c647c3f069.jpg',
  ],
  1009204 => 
  [
    'name' => 'Bloodstorm',
    'description' => '',
    'series' => 
    [
      0 => 2059,
      1 => 2431,
    ],
    'img' => false,
  ],
  1009205 => 
  [
    'name' => 'Boomer',
    'description' => '',
    'series' => 
    [
      0 => 1995,
      1 => 1430,
      2 => 2258,
      3 => 3648,
      4 => 2262,
      5 => 2098,
      6 => 5068,
      7 => 3633,
      8 => 2265,
      9 => 2102,
      10 => 1685,
    ],
    'img' => false,
  ],
  1009206 => 
  [
    'name' => 'Box',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 13492,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/e0/4ce59ef63362d.jpg',
  ],
  1009207 => 
  [
    'name' => 'GW Bridge',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009208 => 
  [
    'name' => 'Brood',
    'description' => '',
    'series' => 
    [
      0 => 1121,
      1 => 8821,
      2 => 2258,
      3 => 2265,
      4 => 3637,
      5 => 1774,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/40/5260321259f91.jpg',
  ],
  1009209 => 
  [
    'name' => 'Brotherhood of Evil Mutants',
    'description' => '',
    'series' => 
    [
      0 => 3743,
      1 => 14683,
      2 => 179,
      3 => 2258,
      4 => 6688,
      5 => 9906,
      6 => 13761,
      7 => 3637,
    ],
    'img' => '.',
  ],
  1009210 => 
  [
    'name' => 'Brute',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009211 => 
  [
    'name' => 'Bucky',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/03/4dc8478464008.jpg',
  ],
  1009212 => 
  [
    'name' => 'Bullseye',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 454,
      2 => 1067,
      3 => 449,
      4 => 2002,
      5 => 1911,
      6 => 18,
      7 => 229,
      8 => 19,
      9 => 1329,
      10 => 2005,
      11 => 13506,
      12 => 574,
      13 => 27,
      14 => 3762,
      15 => 2059,
      16 => 2702,
      17 => 2060,
      18 => 6681,
      19 => 1466,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/30/539a08f322fd1.jpg',
  ],
  1009213 => 
  [
    'name' => 'Bushwacker',
    'description' => '',
    'series' => 
    [
      0 => 2002,
      1 => 181,
      2 => 753,
      3 => 1260,
      4 => 5860,
    ],
    'img' => '.',
  ],
  1009214 => 
  [
    'name' => 'Cable',
    'description' => '',
    'series' => 
    [
      0 => 14703,
      1 => 1995,
      2 => 4002,
      3 => 693,
      4 => 13886,
      5 => 1338,
      6 => 1488,
      7 => 1578,
      8 => 1676,
      9 => 1960,
      10 => 2710,
      11 => 16907,
      12 => 4059,
      13 => 102,
      14 => 103,
      15 => 1487,
      16 => 1577,
      17 => 6668,
      18 => 10105,
      19 => 1962,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/90/526165df2b584.jpg',
  ],
  1009215 => 
  [
    'name' => 'Luke Cage',
    'description' => '',
    'series' => 
    [
      0 => 672,
      1 => 13383,
      2 => 454,
      3 => 744,
      4 => 1991,
      5 => 9086,
      6 => 13320,
      7 => 2384,
      8 => 9861,
      9 => 13032,
      10 => 15305,
      11 => 4864,
      12 => 15691,
      13 => 13527,
      14 => 13257,
      15 => 1067,
      16 => 1760,
      17 => 13691,
      18 => 9896,
      19 => 1121,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/a0/5112d8b6e596c.jpg',
  ],
  1009216 => 
  [
    'name' => 'Caliban',
    'description' => '',
    'series' => 
    [
      0 => 1995,
      1 => 3459,
      2 => 3460,
      3 => 2258,
      4 => 2262,
      5 => 2098,
      6 => 6689,
      7 => 3633,
      8 => 2265,
      9 => 3637,
      10 => 5761,
      11 => 6691,
      12 => 4919,
      13 => 5395,
      14 => 3284,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/52bc8ac6e48db.jpg',
  ],
  1009217 => 
  [
    'name' => 'Callisto',
    'description' => '',
    'series' => 
    [
      0 => 2060,
      1 => 2258,
      2 => 2262,
      3 => 3644,
      4 => 2265,
      5 => 3637,
      6 => 92,
      7 => 343,
      8 => 1684,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/90/4c004082711b8.jpg',
  ],
  1009218 => 
  [
    'name' => 'Calypso',
    'description' => '',
    'series' => 
    [
      0 => 2002,
      1 => 2069,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/b0/4ce59f17087ab.jpg',
  ],
  1009219 => 
  [
    'name' => 'Cannonball',
    'description' => '',
    'series' => 
    [
      0 => 6792,
      1 => 6476,
      2 => 6473,
      3 => 4002,
      4 => 1995,
      5 => 4059,
      6 => 3874,
      7 => 5260,
      8 => 378,
      9 => 1806,
      10 => 2011,
      11 => 3719,
      12 => 3716,
      13 => 3715,
      14 => 1595,
      15 => 1430,
      16 => 8140,
      17 => 563,
      18 => 2055,
      19 => 7455,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/c0/4c00407fb91b5.jpg',
  ],
  1009220 => 
  [
    'name' => 'Captain America',
    'description' => 'Vowing to serve his country any way he could, young Steve Rogers took the super soldier serum to become America\'s one-man army. Fighting for the red, white and blue for over 60 years, Captain America is the living, breathing symbol of freedom and liberty.',
    'series' => 
    [
      0 => 15331,
      1 => 10235,
      2 => 13896,
      3 => 2114,
      4 => 9865,
      5 => 2116,
      6 => 1983,
      7 => 1987,
      8 => 454,
      9 => 2984,
      10 => 14818,
      11 => 14696,
      12 => 14779,
      13 => 9381,
      14 => 1991,
      15 => 9085,
      16 => 3621,
      17 => 354,
      18 => 9086,
      19 => 1988,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/50/537ba56d31087.jpg',
  ],
  1009223 => 
  [
    'name' => 'Captain Britain',
    'description' => '',
    'series' => 
    [
      0 => 10235,
      1 => 10144,
      2 => 378,
      3 => 1806,
      4 => 2011,
      5 => 1596,
      6 => 13517,
      7 => 2021,
      8 => 2039,
      9 => 2300,
      10 => 935,
      11 => 1549,
      12 => 1897,
      13 => 3267,
      14 => 13519,
      15 => 2059,
      16 => 2431,
      17 => 2702,
      18 => 9799,
      19 => 12877,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/50/4dbf0e5d57226.jpg',
  ],
  1009224 => 
  [
    'name' => 'Captain Marvel (Mar-Vell)',
    'description' => '',
    'series' => 
    [
      0 => 1816,
      1 => 2111,
      2 => 93,
      3 => 1997,
      4 => 690,
      5 => 2000,
      6 => 3041,
      7 => 175,
      8 => 105,
      9 => 259,
      10 => 11854,
      11 => 13527,
      12 => 13257,
      13 => 2002,
      14 => 2005,
      15 => 3743,
      16 => 3741,
      17 => 378,
      18 => 1806,
      19 => 2121,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/526032048d1a1.jpg',
  ],
  1009225 => 
  [
    'name' => 'Captain Stacy',
    'description' => 'NYPD Captain George Stacy was the father of one-time Peter Parker girlfriend Gwen Stacy.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/a0/4c00407752be2.jpg',
  ],
  1009226 => 
  [
    'name' => 'Cargill',
    'description' => '',
    'series' => 
    [
      0 => 2011,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/50/4c0040744c205.jpg',
  ],
  1009227 => 
  [
    'name' => 'Carnage',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 11942,
      2 => 14984,
      3 => 2271,
      4 => 2060,
      5 => 1091,
      6 => 13532,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/50/535fee423f170.jpg',
  ],
  1009228 => 
  [
    'name' => 'Sharon Carter',
    'description' => '',
    'series' => 
    [
      0 => 10235,
      1 => 354,
      2 => 1737,
      3 => 2722,
      4 => 1996,
      5 => 832,
      6 => 1997,
      7 => 13507,
      8 => 1804,
      9 => 1779,
      10 => 5061,
      11 => 3127,
      12 => 1612,
      13 => 1613,
      14 => 14476,
      15 => 13691,
      16 => 14804,
      17 => 13602,
    ],
    'img' => '.',
  ],
  1009229 => 
  [
    'name' => 'Frank Castle',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009230 => 
  [
    'name' => 'Catseye',
    'description' => '',
    'series' => 
    [
      0 => 2055,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4c002e0305708.gif',
  ],
  1009231 => 
  [
    'name' => 'Cerebro',
    'description' => '',
    'series' => 
    [
      0 => 179,
      1 => 2258,
      2 => 2265,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4c002e0305708.gif',
  ],
  1009232 => 
  [
    'name' => 'Ch\'od',
    'description' => '',
    'series' => 
    [
      0 => 359,
      1 => 3751,
      2 => 2011,
      3 => 1440,
      4 => 1595,
      5 => 1763,
      6 => 2258,
      7 => 1723,
      8 => 2555,
      9 => 2262,
      10 => 2715,
      11 => 3645,
      12 => 139,
      13 => 1319,
      14 => 1304,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4ce59f2dcd04d.jpg',
  ],
  1009233 => 
  [
    'name' => 'Chamber',
    'description' => '',
    'series' => 
    [
      0 => 3874,
      1 => 2258,
      2 => 2262,
      3 => 84,
      4 => 2265,
      5 => 3637,
      6 => 4773,
      7 => 1318,
    ],
    'img' => '.',
  ],
  1009234 => 
  [
    'name' => 'Chameleon',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 454,
      2 => 2002,
      3 => 1683,
      4 => 3297,
      5 => 59,
      6 => 2271,
      7 => 722,
      8 => 1857,
      9 => 2080,
      10 => 2093,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/7/00/4ce59f390463f.jpg',
  ],
  1009235 => 
  [
    'name' => 'Robin Chapel',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009236 => 
  [
    'name' => 'Lila Cheney',
    'description' => '',
    'series' => 
    [
      0 => 2055,
      1 => 4603,
      2 => 13519,
      3 => 2098,
      4 => 3633,
    ],
    'img' => false,
  ],
  1009237 => 
  [
    'name' => 'Chimera',
    'description' => '',
    'series' => 
    [
      0 => 2262,
    ],
    'img' => false,
  ],
  1009238 => 
  [
    'name' => 'Chronomancer',
    'description' => '',
    'series' => 
    [
      0 => 3753,
    ],
    'img' => false,
  ],
  1009239 => 
  [
    'name' => 'Clea',
    'description' => '',
    'series' => 
    [
      0 => 3743,
      1 => 3741,
      2 => 378,
      3 => 1806,
      4 => 3731,
      5 => 4767,
      6 => 2039,
      7 => 3719,
      8 => 1468,
      9 => 2076,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4c00406b55161.jpg',
  ],
  1009240 => 
  [
    'name' => 'Albert Cleary',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009241 => 
  [
    'name' => 'Cloak',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 1067,
      2 => 9308,
      3 => 3741,
      4 => 3065,
      5 => 2039,
      6 => 1542,
      7 => 3719,
      8 => 2576,
      9 => 2271,
      10 => 13467,
      11 => 843,
      12 => 1604,
      13 => 14055,
      14 => 14108,
      15 => 2258,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/e0/528d31d76a2b0.jpg',
  ],
  1009242 => 
  [
    'name' => 'Malcolm Colcord',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009243 => 
  [
    'name' => 'Colossus',
    'description' => '',
    'series' => 
    [
      0 => 3614,
      1 => 13896,
      2 => 2116,
      3 => 1987,
      4 => 744,
      5 => 7576,
      6 => 1464,
      7 => 1298,
      8 => 1422,
      9 => 1485,
      10 => 5055,
      11 => 354,
      12 => 1991,
      13 => 1340,
      14 => 1816,
      15 => 15305,
      16 => 1537,
      17 => 784,
      18 => 1726,
      19 => 4002,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/e0/51127cf4b996f.jpg',
  ],
  1009244 => 
  [
    'name' => 'Curt Conners',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009245 => 
  [
    'name' => 'Constrictor',
    'description' => '',
    'series' => 
    [
      0 => 459,
      1 => 1945,
      2 => 2005,
      3 => 2121,
      4 => 2254,
      5 => 2039,
      6 => 3715,
      7 => 7057,
      8 => 1910,
    ],
    'img' => '.',
  ],
  1009246 => 
  [
    'name' => 'Cornelius',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009247 => 
  [
    'name' => 'Corsair',
    'description' => '',
    'series' => 
    [
      0 => 3751,
      1 => 378,
      2 => 1806,
      3 => 2011,
      4 => 1440,
      5 => 1595,
      6 => 2258,
      7 => 1723,
      8 => 2555,
      9 => 1849,
      10 => 7056,
      11 => 2715,
      12 => 1460,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/f0/4c004062d89bd.jpg',
  ],
  1009248 => 
  [
    'name' => 'Fabian Cortez',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/f0/4c0040603dda1.jpg',
  ],
  1009249 => 
  [
    'name' => 'Count Nefaria',
    'description' => '',
    'series' => 
    [
      0 => 1997,
      1 => 1506,
      2 => 189,
      3 => 1494,
      4 => 222,
      5 => 1440,
      6 => 14485,
      7 => 14486,
      8 => 249,
      9 => 2079,
      10 => 2725,
      11 => 2258,
      12 => 1723,
    ],
    'img' => '.',
  ],
  1009250 => 
  [
    'name' => 'Countess',
    'description' => '',
    'series' => 
    [
      0 => 2123,
      1 => 1812,
    ],
    'img' => false,
  ],
  1009251 => 
  [
    'name' => 'Crimson Dynamo',
    'description' => '',
    'series' => 
    [
      0 => 2111,
      1 => 93,
      2 => 9706,
      3 => 734,
      4 => 9886,
      5 => 378,
      6 => 1806,
      7 => 1814,
      8 => 2021,
      9 => 13577,
      10 => 2572,
      11 => 2029,
      12 => 10725,
      13 => 1846,
      14 => 1506,
      15 => 189,
      16 => 1494,
      17 => 222,
      18 => 2079,
      19 => 2725,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/b0/526955e3c7c41.jpg',
  ],
  1009252 => 
  [
    'name' => 'Crossbones',
    'description' => '',
    'series' => 
    [
      0 => 9086,
      1 => 2722,
      2 => 1997,
      3 => 832,
      4 => 1996,
      5 => 13190,
      6 => 13504,
      7 => 13767,
      8 => 1804,
      9 => 1779,
      10 => 1612,
      11 => 1613,
      12 => 14804,
      13 => 877,
      14 => 1776,
      15 => 2039,
      16 => 14429,
      17 => 18527,
    ],
    'img' => '.',
  ],
  1009253 => 
  [
    'name' => 'Crule',
    'description' => '',
    'series' => 
    [
      0 => 3633,
      1 => 13492,
    ],
    'img' => false,
  ],
  1009254 => 
  [
    'name' => 'Crusher Hogan',
    'description' => '',
    'series' => 
    [
      0 => 2069,
      1 => 2071,
      2 => 69,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/90/4c004057a5bc6.jpg',
  ],
  1009255 => 
  [
    'name' => 'Crystal',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 1991,
      2 => 354,
      3 => 9086,
      4 => 1340,
      5 => 1679,
      6 => 378,
      7 => 1806,
      8 => 421,
      9 => 2121,
      10 => 2123,
      11 => 2012,
      12 => 5413,
      13 => 2445,
      14 => 1812,
      15 => 2021,
      16 => 2027,
      17 => 2029,
      18 => 2300,
      19 => 1430,
    ],
    'img' => '.',
  ],
  1009256 => 
  [
    'name' => 'Cyber',
    'description' => '',
    'series' => 
    [
      0 => 2262,
      1 => 2098,
      2 => 2941,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/f0/4c0040521bc06.jpg',
  ],
  1009257 => 
  [
      'name' => 'Cyclops',
    'description' => '',
    'series' => 
    [
      0 => 3614,
      1 => 13896,
      2 => 2116,
      3 => 1983,
      4 => 454,
      5 => 744,
      6 => 7576,
      7 => 1464,
      8 => 1298,
      9 => 1422,
      10 => 1485,
      11 => 5055,
      12 => 1991,
      13 => 15305,
      14 => 16510,
      15 => 1995,
      16 => 4002,
      17 => 693,
      18 => 1338,
      19 => 4059,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/70/526547e2d90ad.jpg',
  ],
  1009258 => 
  [
    'name' => 'Dagger',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 1067,
      2 => 9308,
      3 => 3741,
      4 => 3719,
      5 => 2576,
      6 => 1712,
      7 => 2271,
      8 => 13467,
      9 => 14055,
      10 => 14108,
      11 => 2258,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/e0/528d31c9eac10.jpg',
  ],
  1009259 => 
  [
    'name' => 'Damage Control',
    'description' => '',
    'series' => 
    [
      0 => 2039,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/00/4c00404b5e1a2.jpg',
  ],
  1009260 => 
  [
    'name' => 'Lorna Dane',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009261 => 
  [
    'name' => 'Carol Danvers',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009262 => 
  [
    'name' => 'Daredevil',
    'description' => 'Abandoned by his mother, Matt Murdock was raised by his father, boxer "Battling Jack" Murdock, in Hell\'s Kitchen. Realizing that rules were needed to prevent people from behaving badly, young Matt decided to study law; however, when he saved a man from an oncoming truck, it spilled a radioactive cargo that rendered Matt blind while enhancing his remaining senses. Under the harsh tutelage of blind martial arts master Stick, Matt mastered his heightened senses and became a formidable fighter.',
    'series' => 
    [
      0 => 9994,
      1 => 9995,
      2 => 672,
      3 => 13383,
      4 => 2116,
      5 => 1983,
      6 => 1987,
      7 => 454,
      8 => 2984,
      9 => 1967,
      10 => 6792,
      11 => 1991,
      12 => 354,
      13 => 1988,
      14 => 1340,
      15 => 1496,
      16 => 1816,
      17 => 16230,
      18 => 14246,
      19 => 1503,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/50/50febb79985ee.jpg',
  ],
  1009265 => 
  [
    'name' => 'Dark Phoenix',
    'description' => '',
    'series' => 
    [
      0 => 3874,
      1 => 14399,
      2 => 12396,
      3 => 1440,
      4 => 2258,
      5 => 2098,
      6 => 6689,
      7 => 2265,
      8 => 4773,
      9 => 1774,
      10 => 1775,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/e0/4ce59f6c7e332.jpg',
  ],
  1009266 => 
  [
    'name' => 'Darkstar',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1816,
      2 => 98,
      3 => 2001,
      4 => 1720,
      5 => 1721,
      6 => 2572,
      7 => 3723,
      8 => 2049,
      9 => 2281,
      10 => 1807,
      11 => 56,
      12 => 2271,
    ],
    'img' => '.',
  ],
  1009267 => 
  [
    'name' => 'Dazzler',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 1987,
      2 => 1991,
      3 => 1945,
      4 => 3751,
      5 => 3745,
      6 => 11796,
      7 => 14399,
      8 => 3719,
      9 => 1440,
      10 => 3459,
      11 => 3460,
      12 => 3716,
      13 => 935,
      14 => 1549,
      15 => 1897,
      16 => 2055,
      17 => 13519,
      18 => 2059,
      19 => 2431,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/10/4fe364b0a2177.jpg',
  ],
  1009268 => 
  [
    'name' => 'Deadpool',
    'description' => '',
    'series' => 
    [
      0 => 12429,
      1 => 15276,
      2 => 454,
      3 => 1945,
      4 => 4002,
      5 => 693,
      6 => 13886,
      7 => 1209,
      8 => 1338,
      9 => 1488,
      10 => 1578,
      11 => 1676,
      12 => 1960,
      13 => 2710,
      14 => 1487,
      15 => 1577,
      16 => 10105,
      17 => 1962,
      18 => 8456,
      19 => 11601,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/90/5261a86cacb99.jpg',
  ],
  1009269 => 
  [
    'name' => 'Death',
    'description' => '',
    'series' => 
    [
      0 => 2002,
      1 => 5701,
      2 => 2005,
      3 => 3741,
      4 => 1449,
      5 => 2055,
      6 => 13519,
      7 => 3667,
      8 => 3640,
      9 => 1452,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/80/526031f5a21eb.jpg',
  ],
  1009270 => 
  [
    'name' => 'Deathbird',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 1679,
      2 => 3753,
      3 => 13257,
      4 => 2029,
      5 => 2258,
      6 => 2265,
      7 => 3637,
      8 => 139,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/60/4c004041be770.jpg',
  ],
  1009271 => 
  [
    'name' => 'Destiny',
    'description' => '',
    'series' => 
    [
      0 => 1988,
      1 => 3719,
      2 => 1404,
      3 => 2441,
      4 => 2989,
      5 => 2080,
      6 => 2258,
      7 => 1777,
      8 => 3644,
      9 => 2098,
      10 => 3633,
      11 => 2265,
      12 => 1327,
      13 => 2101,
      14 => 1684,
      15 => 1685,
      16 => 646,
      17 => 142,
      18 => 144,
      19 => 2107,
    ],
    'img' => false,
  ],
  1009272 => 
  [
    'name' => 'Detective Soap',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009273 => 
  [
    'name' => 'Diablo',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 354,
      2 => 1816,
      3 => 2121,
      4 => 421,
      5 => 3090,
      6 => 2435,
      7 => 2029,
      8 => 10725,
      9 => 2300,
      10 => 2301,
      11 => 1504,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/f0/4ce59f83af33f.jpg',
  ],
  1009274 => 
  [
    'name' => 'Diamondback (Rachel Leighton)',
    'description' => '',
    'series' => 
    [
      0 => 672,
      1 => 13383,
      2 => 1679,
      3 => 359,
      4 => 1945,
      5 => 1996,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/f0/526955c158ece.jpg',
  ],
  1009275 => 
  [
    'name' => 'Doc Samson',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1816,
      2 => 960,
      3 => 378,
      4 => 1806,
      5 => 1814,
      6 => 4916,
      7 => 3452,
      8 => 6043,
      9 => 2021,
      10 => 465,
      11 => 2983,
      12 => 166,
      13 => 8842,
      14 => 13577,
      15 => 2300,
      16 => 1637,
      17 => 1504,
      18 => 3648,
    ],
    'img' => '.',
  ],
  1009276 => 
  [
    'name' => 'Doctor Octopus',
    'description' => '',
    'series' => 
    [
      0 => 672,
      1 => 13383,
      2 => 1987,
      3 => 454,
      4 => 2984,
      5 => 1967,
      6 => 318,
      7 => 14246,
      8 => 4889,
      9 => 324,
      10 => 2271,
      11 => 15297,
      12 => 2063,
      13 => 15295,
      14 => 325,
      15 => 2071,
      16 => 69,
      17 => 1299,
      18 => 736,
      19 => 1921,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/b0/528d31b62eaba.jpg',
  ],
  1009277 => 
  [
    'name' => 'Domino',
    'description' => '',
    'series' => 
    [
      0 => 1995,
      1 => 4002,
      2 => 693,
      3 => 1676,
      4 => 4059,
      5 => 6668,
      6 => 1965,
      7 => 1110,
      8 => 3742,
      9 => 378,
      10 => 1806,
      11 => 8842,
      12 => 1430,
      13 => 2053,
      14 => 2258,
      15 => 6689,
      16 => 3633,
      17 => 88,
      18 => 13428,
      19 => 10592,
    ],
    'img' => '.',
  ],
  1009278 => 
  [
    'name' => 'Doomsday Man',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1496,
    ],
    'img' => false,
  ],
  1009279 => 
  [
    'name' => 'Doop',
    'description' => '',
    'series' => 
    [
      0 => 18794,
      1 => 8138,
      2 => 3633,
      3 => 88,
      4 => 462,
      5 => 226,
      6 => 153,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/80/4c7c646b68a2c.jpg',
  ],
  1009280 => 
  [
    'name' => 'Dormammu',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 728,
      2 => 3290,
      3 => 3741,
      4 => 3719,
      5 => 188,
      6 => 1712,
      7 => 15295,
      8 => 2076,
      9 => 3648,
    ],
    'img' => '.',
  ],
  1009281 => 
  [
    'name' => 'Doctor Doom',
    'description' => '',
    'series' => 
    [
      0 => 725,
      1 => 1423,
      2 => 9994,
      3 => 9995,
      4 => 2116,
      5 => 454,
      6 => 3621,
      7 => 1991,
      8 => 10035,
      9 => 9859,
      10 => 6476,
      11 => 6473,
      12 => 10056,
      13 => 9864,
      14 => 6804,
      15 => 9120,
      16 => 1123,
      17 => 2236,
      18 => 8213,
      19 => 1721,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/60/53176bb096d17.jpg',
  ],
  1009282 => 
  [
    'name' => 'Doctor Strange',
    'description' => '',
    'series' => 
    [
      0 => 9994,
      1 => 9995,
      2 => 2116,
      3 => 1987,
      4 => 454,
      5 => 2984,
      6 => 1292,
      7 => 1291,
      8 => 9085,
      9 => 1991,
      10 => 9086,
      11 => 1988,
      12 => 94,
      13 => 15305,
      14 => 4864,
      15 => 784,
      16 => 1726,
      17 => 693,
      18 => 1598,
      19 => 449,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/f0/5261a85a501fe.jpg',
  ],
  1009283 => 
  [
    'name' => 'Dragon Man',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 784,
      2 => 378,
      3 => 1806,
      4 => 2121,
      5 => 2435,
      6 => 14102,
      7 => 977,
      8 => 2059,
      9 => 2431,
      10 => 2702,
      11 => 2271,
      12 => 3666,
      13 => 1608,
      14 => 6688,
      15 => 1510,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/f0/4c003f1aa3a1f.jpg',
  ],
  1009284 => 
  [
    'name' => 'Dum Dum Dugan',
    'description' => '',
    'series' => 
    [
      0 => 6056,
      1 => 1945,
      2 => 2722,
      3 => 1997,
      4 => 7458,
      5 => 4889,
      6 => 1468,
      7 => 1674,
      8 => 2045,
      9 => 1866,
      10 => 9922,
      11 => 6681,
      12 => 6682,
      13 => 5104,
      14 => 6796,
      15 => 2067,
      16 => 2076,
      17 => 2725,
      18 => 4919,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/00/4ce59f9fc788f.jpg',
  ],
  1009285 => 
  [
    'name' => 'Dust',
    'description' => '',
    'series' => 
    [
      0 => 2281,
      1 => 749,
      2 => 1807,
      3 => 56,
      4 => 1667,
      5 => 5338,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/f0/4c003f17db9a6.jpg',
  ],
  1009286 => 
  [
    'name' => 'Earthquake',
    'description' => '',
    'series' => 
    [
      0 => 2445,
      1 => 2027,
      2 => 1440,
      3 => 2258,
      4 => 139,
      5 => 1775,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/90/4c003f153b571.jpg',
  ],
  1009287 => 
  [
    'name' => 'Electro',
    'description' => '',
    'series' => 
    [
      0 => 2234,
      1 => 454,
      2 => 1987,
      3 => 1967,
      4 => 449,
      5 => 2002,
      6 => 18,
      7 => 1521,
      8 => 4889,
      9 => 2029,
      10 => 1846,
      11 => 268,
      12 => 5386,
      13 => 5387,
      14 => 1730,
      15 => 2981,
      16 => 3716,
      17 => 3711,
      18 => 1866,
      19 => 753,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/60/4c003f1214bd7.jpg',
  ],
  1009288 => 
  [
    'name' => 'Elektra',
    'description' => '',
    'series' => 
    [
      0 => 9706,
      1 => 2002,
      2 => 449,
      3 => 1911,
      4 => 18,
      5 => 1170,
      6 => 20,
      7 => 21,
      8 => 22,
      9 => 3897,
      10 => 574,
      11 => 18459,
      12 => 198,
      13 => 1217,
      14 => 147,
      15 => 280,
      16 => 27,
      17 => 9898,
      18 => 13330,
      19 => 8842,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/d0/51114fec4a2c8.jpg',
  ],
  1009290 => 
  [
    'name' => 'Elite',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009291 => 
  [
    'name' => 'Empath',
    'description' => '',
    'series' => 
    [
      0 => 2055,
      1 => 13519,
      2 => 2258,
      3 => 3633,
      4 => 646,
      5 => 3321,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4ce59faf350ea.jpg',
  ],
  1009292 => 
  [
    'name' => 'Emplate',
    'description' => '',
    'series' => 
    [
      0 => 2102,
      1 => 1685,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/10/4bb3bcffb8325.jpg',
  ],
  1009293 => 
  [
    'name' => 'Erik the Red',
    'description' => '',
    'series' => 
    [
      0 => 1508,
      1 => 2258,
    ],
    'img' => false,
  ],
  1009294 => 
  [
    'name' => 'Exiles',
    'description' => '',
    'series' => 
    [
      0 => 7196,
      1 => 479,
      2 => 1419,
      3 => 1462,
      4 => 1563,
      5 => 1564,
      6 => 1899,
      7 => 2553,
      8 => 3860,
      9 => 154,
      10 => 199,
      11 => 3291,
      12 => 1184,
      13 => 1246,
      14 => 1418,
      15 => 115,
      16 => 116,
      17 => 284,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/c0/4ce59fbab92f5.jpg',
  ],
  1009295 => 
  [
    'name' => 'Exodus',
    'description' => '',
    'series' => 
    [
      0 => 1995,
      1 => 2011,
      2 => 2258,
      3 => 3633,
      4 => 2265,
      5 => 3640,
      6 => 3754,
      7 => 3637,
      8 => 2102,
      9 => 1452,
      10 => 1685,
    ],
    'img' => '.',
  ],
  1009296 => 
  [
    'name' => 'Expediter',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009297 => 
  [
    'name' => 'Falcon',
    'description' => 'With a mental connection to all birds and a suit that gives him wings to fly, The Falcon has been both the partner to Captain America and an Avenger himself. Whether as a super hero or in his secret identity of social worker Sam Wilson, The Falcon dedicates his life to standing up for others.',
    'series' => 
    [
      0 => 2984,
      1 => 354,
      2 => 1991,
      3 => 1340,
      4 => 1737,
      5 => 2384,
      6 => 158,
      7 => 227,
      8 => 271,
      9 => 784,
      10 => 2226,
      11 => 2722,
      12 => 832,
      13 => 1996,
      14 => 1997,
      15 => 1324,
      16 => 1550,
      17 => 13211,
      18 => 1766,
      19 => 3629,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/b0/5111505fb7009.jpg',
  ],
  1009298 => 
  [
    'name' => 'Famine',
    'description' => '',
    'series' => 
    [
      0 => 2258,
      1 => 2098,
      2 => 5068,
    ],
    'img' => false,
  ],
  1009299 => 
  [
    'name' => 'Fantastic Four',
    'description' => 'After being exposed to cosmic rays, Reed Richards, Susan Storm, Ben Grimm and Johnny Storm found they had amazing new powers. Reed Richards found he has the ability to stretch his body in any way he wanted, while Susan Storm can turn herself, objects and other people invisible. Ben Grimm transformed into a rocky, super-strong behemoth and Johnny Storm has the ability to set himself on fire. Dubbed the Fantastic Four, Mr. Fantastic, Invisible Woman, Thing and the Human Torch are Marvel\'s First Family.',
    'series' => 
    [
      0 => 725,
      1 => 1251,
      2 => 1253,
      3 => 1423,
      4 => 9994,
      5 => 9995,
      6 => 7524,
      7 => 6079,
      8 => 672,
      9 => 13383,
      10 => 6666,
      11 => 454,
      12 => 2984,
      13 => 6056,
      14 => 744,
      15 => 10030,
      16 => 10031,
      17 => 1991,
      18 => 9859,
      19 => 10035,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/60/50febc4f55525.jpg',
  ],
  1009301 => 
  [
    'name' => 'Fantomex',
    'description' => '',
    'series' => 
    [
      0 => 1807,
      1 => 2281,
      2 => 56,
      3 => 9976,
      4 => 10585,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/535ff35da5ccd.jpg',
  ],
  1009302 => 
  [
    'name' => 'Fenris',
    'description' => '',
    'series' => 
    [
      0 => 2032,
      1 => 3301,
      2 => 6796,
      3 => 3648,
    ],
    'img' => false,
  ],
  1009303 => 
  [
    'name' => 'Fin Fang Foom',
    'description' => '',
    'series' => 
    [
      0 => 13032,
      1 => 3249,
      2 => 2029,
      3 => 2572,
      4 => 6049,
      5 => 2083,
      6 => 3451,
      7 => 2094,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/60/4ce59fc647d58.jpg',
  ],
  1009304 => 
  [
    'name' => 'Firebrand',
    'description' => '',
    'series' => 
    [
      0 => 2572,
      1 => 2029,
      2 => 2077,
    ],
    'img' => '.',
  ],
  1009305 => 
  [
    'name' => 'Firelord',
    'description' => '',
    'series' => 
    [
      0 => 3621,
      1 => 3751,
      2 => 3741,
      3 => 2123,
      4 => 1813,
      5 => 1812,
      6 => 1814,
      7 => 13577,
      8 => 1440,
      9 => 2288,
      10 => 2083,
      11 => 581,
      12 => 2258,
      13 => 1723,
    ],
    'img' => '.',
  ],
  1009306 => 
  [
    'name' => 'Firestar',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 454,
      2 => 354,
      3 => 1340,
      4 => 1496,
      5 => 1737,
      6 => 1816,
      7 => 158,
      8 => 98,
      9 => 12973,
      10 => 2121,
      11 => 13855,
      12 => 9711,
      13 => 3738,
      14 => 2572,
      15 => 2029,
      16 => 2039,
      17 => 13602,
      18 => 886,
      19 => 2083,
    ],
    'img' => '.',
  ],
  1009307 => 
  [
    'name' => 'Force Works',
    'description' => '',
    'series' => 
    [
      0 => 2029,
      1 => 2039,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/a0/52740df74b57d.jpg',
  ],
  1009308 => 
  [
    'name' => 'Forearm',
    'description' => '',
    'series' => 
    [
      0 => 2011,
      1 => 2258,
      2 => 2262,
      3 => 85,
      4 => 2098,
      5 => 1915,
      6 => 5068,
      7 => 3633,
      8 => 2265,
    ],
    'img' => false,
  ],
  1009309 => 
  [
    'name' => 'Forge',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 3753,
      2 => 4002,
      3 => 3874,
      4 => 3741,
      5 => 14389,
      6 => 2011,
      7 => 1430,
      8 => 569,
      9 => 1185,
      10 => 2055,
      11 => 749,
      12 => 1668,
      13 => 2258,
      14 => 2262,
      15 => 317,
      16 => 2098,
      17 => 6689,
      18 => 3633,
      19 => 2265,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/90/5269585071503.jpg',
  ],
  1009310 => 
  [
    'name' => 'Emma Frost',
    'description' => '',
    'series' => 
    [
      0 => 744,
      1 => 7576,
      2 => 1464,
      3 => 1298,
      4 => 1422,
      5 => 1485,
      6 => 5055,
      7 => 15305,
      8 => 4002,
      9 => 3751,
      10 => 5701,
      11 => 389,
      12 => 13502,
      13 => 1236,
      14 => 1227,
      15 => 1254,
      16 => 14399,
      17 => 777,
      18 => 1476,
      19 => 9895,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/80/51151ef7cf4c8.jpg',
  ],
  1009311 => 
  [
    'name' => 'Rumiko Fujikawa',
    'description' => '',
    'series' => 
    [
      0 => 2572,
    ],
    'img' => false,
  ],
  1009312 => 
  [
    'name' => 'Galactus',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 3613,
      2 => 3621,
      3 => 2111,
      4 => 93,
      5 => 2002,
      6 => 11518,
      7 => 12988,
      8 => 3741,
      9 => 378,
      10 => 1806,
      11 => 1263,
      12 => 2444,
      13 => 479,
      14 => 116,
      15 => 2123,
      16 => 2121,
      17 => 421,
      18 => 2012,
      19 => 3293,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/03/528d31a791308.jpg',
  ],
  1009313 => 
  [
    'name' => 'Gambit',
    'description' => '',
    'series' => 
    [
      0 => 744,
      1 => 354,
      2 => 1340,
      3 => 1816,
      4 => 15305,
      5 => 16230,
      6 => 3626,
      7 => 1995,
      8 => 3874,
      9 => 378,
      10 => 1806,
      11 => 777,
      12 => 13853,
      13 => 1476,
      14 => 1289,
      15 => 1430,
      16 => 6647,
      17 => 2189,
      18 => 2049,
      19 => 8132,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/40/52696aa8aee99.jpg',
  ],
  1009314 => 
  [
    'name' => 'Mac Gargan',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009315 => 
  [
    'name' => 'Gateway',
    'description' => '',
    'series' => 
    [
      0 => 2258,
      1 => 2262,
      2 => 1687,
      3 => 2265,
      4 => 2100,
      5 => 211,
      6 => 242,
      7 => 139,
      8 => 4919,
      9 => 646,
      10 => 142,
    ],
    'img' => '.',
  ],
  1009316 => 
  [
    'name' => 'Gauntlet (Joseph Green)',
    'description' => '',
    'series' => 
    [
      0 => 10235,
      1 => 1945,
      2 => 3087,
      3 => 1995,
      4 => 4619,
      5 => 2262,
      6 => 2098,
      7 => 2265,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/7/20/535ff2a48869b.jpg',
  ],
  1009317 => 
  [
    'name' => 'Genesis',
    'description' => '',
    'series' => 
    [
      0 => 2262,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/30/4c003eeedf93c.jpg',
  ],
  1009318 => 
  [
    'name' => 'Ghost Rider (Johnny Blaze)',
    'description' => '',
    'series' => 
    [
      0 => 13896,
      1 => 354,
      2 => 1737,
      3 => 1565,
      4 => 2001,
      5 => 1720,
      6 => 1721,
      7 => 2002,
      8 => 1911,
      9 => 3741,
      10 => 1552,
      11 => 1427,
      12 => 2121,
      13 => 13691,
      14 => 805,
      15 => 1104,
      16 => 14018,
      17 => 2013,
      18 => 3733,
      19 => 1902,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/80/52696ba1353e7.jpg',
  ],
  1009320 => 
  [
    'name' => 'Giant Man',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/e0/4ce43388b9255.jpg',
  ],
  1009321 => 
  [
    'name' => 'Gladiator (Kallark)',
    'description' => '',
    'series' => 
    [
      0 => 13025,
      1 => 14818,
      2 => 1816,
      3 => 3874,
      4 => 3751,
      5 => 2002,
      6 => 1911,
      7 => 2121,
      8 => 341,
      9 => 3293,
      10 => 2254,
      11 => 2445,
      12 => 2027,
      13 => 2039,
      14 => 1591,
      15 => 1439,
      16 => 1440,
      17 => 2049,
      18 => 3706,
      19 => 1763,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/03/52696b33b7920.jpg',
  ],
  1009322 => 
  [
    'name' => 'Goblin Queen',
    'description' => '',
    'series' => 
    [
      0 => 2258,
      1 => 3648,
      2 => 2098,
      3 => 3633,
      4 => 2265,
      5 => 1774,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/b0/52bc8219eb973.jpg',
  ],
  1009324 => 
  [
    'name' => 'Gorgon',
    'description' => '',
    'series' => 
    [
      0 => 3621,
      1 => 2002,
      2 => 378,
      3 => 1806,
      4 => 421,
      5 => 2121,
      6 => 2123,
      7 => 2445,
      8 => 1812,
      9 => 2027,
      10 => 13577,
      11 => 3719,
      12 => 3715,
      13 => 9922,
      14 => 753,
      15 => 1417,
      16 => 367,
      17 => 6796,
      18 => 632,
      19 => 1771,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/60/526033e7ac8ee.jpg',
  ],
  1009325 => 
  [
    'name' => 'Norman Osborn',
    'description' => '',
    'series' => 
    [
      0 => 6807,
      1 => 1987,
      2 => 454,
      3 => 1967,
      4 => 318,
      5 => 1283,
      6 => 9086,
      7 => 1945,
      8 => 6599,
      9 => 2005,
      10 => 378,
      11 => 1806,
      12 => 3762,
      13 => 8842,
      14 => 4889,
      15 => 866,
      16 => 9748,
      17 => 2932,
      18 => 3719,
      19 => 721,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/f0/51e829cd06982.jpg',
  ],
  1009326 => 
  [
    'name' => 'Gressill',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009327 => 
  [
    'name' => 'Jean Grey',
    'description' => '',
    'series' => 
    [
      0 => 15305,
      1 => 4002,
      2 => 3874,
      3 => 378,
      4 => 1806,
      5 => 2011,
      6 => 2121,
      7 => 2446,
      8 => 2039,
      9 => 3719,
      10 => 1440,
      11 => 1364,
      12 => 6647,
      13 => 2189,
      14 => 802,
      15 => 2281,
      16 => 1807,
      17 => 1166,
      18 => 56,
      19 => 3900,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/d0/528d3412090b4.jpg',
  ],
  1009328 => 
  [
    'name' => 'Grim Reaper',
    'description' => '',
    'series' => 
    [
      0 => 3621,
      1 => 354,
      2 => 1340,
      3 => 1496,
      4 => 1737,
      5 => 1816,
      6 => 6476,
      7 => 6473,
      8 => 1992,
      9 => 13257,
      10 => 1813,
      11 => 14498,
      12 => 14495,
      13 => 6674,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/b0/4c003ee8885e4.jpg',
  ],
  1009329 => 
  [
    'name' => 'Ben Grimm',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009330 => 
  [
    'name' => 'Guardian',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 1983,
      2 => 2115,
      3 => 378,
      4 => 1806,
      5 => 2123,
      6 => 2121,
      7 => 1812,
      8 => 3289,
      9 => 2059,
      10 => 2431,
      11 => 2702,
      12 => 2258,
      13 => 3654,
      14 => 2262,
      15 => 3637,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/50/4dd531d26079c.jpg',
  ],
  1009331 => 
  [
    'name' => 'Guardsmen',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009332 => 
  [
    'name' => 'H.E.R.B.I.E.',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/e0/4ce59fe9811cb.jpg',
  ],
  1009333 => 
  [
    'name' => 'Half-Life (Tony Masterson)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/20/4ce59ff485b35.jpg',
  ],
  1009334 => 
  [
    'name' => 'Hammerhead',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 454,
      2 => 5376,
      3 => 2271,
      4 => 2060,
      5 => 5860,
      6 => 2071,
      7 => 69,
      8 => 13721,
      9 => 2262,
      10 => 84,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/c0/4c003ee47c207.jpg',
  ],
  1009335 => 
  [
    'name' => 'Felicia Hardy',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009336 => 
  [
    'name' => 'Harpoon',
    'description' => '',
    'series' => 
    [
      0 => 2258,
      1 => 2098,
      2 => 92,
      3 => 343,
    ],
    'img' => false,
  ],
  1009337 => 
  [
    'name' => 'Havok',
    'description' => '',
    'series' => 
    [
      0 => 3614,
      1 => 2116,
      2 => 3874,
      3 => 3751,
      4 => 3743,
      5 => 378,
      6 => 1806,
      7 => 2550,
      8 => 3289,
      9 => 2039,
      10 => 1440,
      11 => 3460,
      12 => 3459,
      13 => 1689,
      14 => 2301,
      15 => 1595,
      16 => 1504,
      17 => 1430,
      18 => 8131,
      19 => 8132,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/e0/5261659ebeaf8.jpg',
  ],
  1009338 => 
  [
    'name' => 'Hawkeye',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 14818,
      2 => 9085,
      3 => 1991,
      4 => 354,
      5 => 9086,
      6 => 13320,
      7 => 1988,
      8 => 15373,
      9 => 1816,
      10 => 2384,
      11 => 2111,
      12 => 93,
      13 => 9863,
      14 => 10048,
      15 => 15305,
      16 => 2962,
      17 => 13584,
      18 => 1679,
      19 => 15010,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/90/50fecaf4f101b.jpg',
  ],
  1009339 => 
  [
    'name' => 'Harry Heck',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009340 => 
  [
    'name' => 'Hellfire Club',
    'description' => '',
    'series' => 
    [
      0 => 744,
      1 => 7576,
      2 => 1485,
      3 => 3751,
      4 => 2258,
      5 => 3648,
      6 => 15598,
      7 => 1318,
      8 => 646,
      9 => 182,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/20/4c003eddcc659.jpg',
  ],
  1009341 => 
  [
    'name' => 'Hemingway',
    'description' => '',
    'series' => 
    [
      0 => 2258,
    ],
    'img' => false,
  ],
  1009342 => 
  [
    'name' => 'Hepzibah',
    'description' => '',
    'series' => 
    [
      0 => 359,
      1 => 2011,
      2 => 1440,
      3 => 1763,
      4 => 2258,
      5 => 1723,
      6 => 2555,
      7 => 2262,
      8 => 2715,
      9 => 3645,
      10 => 1035,
      11 => 139,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/d0/4c003eda76ac7.jpg',
  ],
  1009343 => 
  [
    'name' => 'Hercules',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 1991,
      2 => 354,
      3 => 1988,
      4 => 1340,
      5 => 1737,
      6 => 1816,
      7 => 2111,
      8 => 93,
      9 => 158,
      10 => 6476,
      11 => 6473,
      12 => 1679,
      13 => 1537,
      14 => 98,
      15 => 1565,
      16 => 2001,
      17 => 1720,
      18 => 1721,
      19 => 12966,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/d0/52052ebddfa53.jpg',
  ],
  1009344 => 
  [
    'name' => 'Carol Hines',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009345 => 
  [
    'name' => 'Hitman',
    'description' => '',
    'series' => 
    [
      0 => 1987,
    ],
    'img' => false,
  ],
  1009346 => 
  [
    'name' => 'Anne Marie Hoag',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009347 => 
  [
    'name' => 'Hobgoblin (Roderick Kingsley)',
    'description' => '',
    'series' => 
    [
      0 => 1126,
      1 => 2234,
      2 => 454,
      3 => 1987,
      4 => 449,
      5 => 18,
      6 => 2005,
      7 => 3741,
      8 => 2445,
      9 => 2027,
      10 => 1440,
      11 => 2271,
      12 => 14655,
      13 => 2069,
      14 => 1330,
      15 => 2258,
      16 => 1723,
      17 => 2092,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/80/4c003ed3cff99.jpg',
  ],
  1009348 => 
  [
    'name' => 'Happy Hogan',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/50/4ce5a00362b2c.jpg',
  ],
  1009349 => 
  [
    'name' => 'Holocaust (Age of Apocalypse)',
    'description' => '',
    'series' => 
    [
      0 => 787,
      1 => 2258,
      2 => 3633,
      3 => 2265,
      4 => 3640,
      5 => 2104,
      6 => 1319,
      7 => 2101,
      8 => 2102,
      9 => 1452,
      10 => 1583,
      11 => 1685,
      12 => 6430,
      13 => 1304,
    ],
    'img' => false,
  ],
  1009350 => 
  [
    'name' => 'Holy',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009351 => 
  [
    'name' => 'Hulk',
    'description' => 'Caught in a gamma bomb explosion while trying to save the life of a teenager, Dr. Bruce Banner was transformed into the incredibly powerful creature called the Hulk. An all too often misunderstood hero, the angrier the Hulk gets, the stronger the Hulk gets.',
    'series' => 
    [
      0 => 15276,
      1 => 12429,
      2 => 458,
      3 => 13896,
      4 => 7231,
      5 => 2116,
      6 => 1987,
      7 => 454,
      8 => 2984,
      9 => 354,
      10 => 1991,
      11 => 3621,
      12 => 9085,
      13 => 9859,
      14 => 10035,
      15 => 1988,
      16 => 15373,
      17 => 1340,
      18 => 1816,
      19 => 2384,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/a0/538615ca33ab0.jpg',
  ],
  1009355 => 
  [
    'name' => 'Hulkling',
    'description' => '',
    'series' => 
    [
      0 => 13447,
      1 => 1945,
      2 => 1067,
      3 => 1866,
      4 => 9765,
      5 => 756,
      6 => 1250,
      7 => 1661,
      8 => 1955,
    ],
    'img' => '.',
  ],
  1009356 => 
  [
    'name' => 'Human Torch',
    'description' => '',
    'series' => 
    [
      0 => 725,
      1 => 1253,
      2 => 7524,
      3 => 6079,
      4 => 672,
      5 => 13383,
      6 => 2114,
      7 => 9865,
      8 => 2116,
      9 => 1987,
      10 => 454,
      11 => 2984,
      12 => 1967,
      13 => 3621,
      14 => 354,
      15 => 1991,
      16 => 1340,
      17 => 1496,
      18 => 1737,
      19 => 1816,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/70/5261a7f7b0917.jpg',
  ],
  1009357 => 
  [
    'name' => 'Husk',
    'description' => '',
    'series' => 
    [
      0 => 2258,
      1 => 184,
      2 => 2262,
      3 => 8086,
      4 => 2265,
      5 => 3637,
      6 => 1318,
      7 => 2102,
      8 => 1685,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/e0/4c003eca01988.jpg',
  ],
  1009358 => 
  [
    'name' => 'Hussar',
    'description' => '',
    'series' => 
    [
      0 => 2445,
      1 => 2027,
      2 => 1440,
      3 => 2258,
      4 => 1775,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/e0/4c003ec700983.jpg',
  ],
  1009359 => 
  [
    'name' => 'Hydra',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 1489,
      2 => 9859,
      3 => 10035,
      4 => 1997,
      5 => 12965,
      6 => 12115,
      7 => 2002,
      8 => 378,
      9 => 1806,
      10 => 3730,
      11 => 1505,
      12 => 1815,
      13 => 1140,
      14 => 1468,
      15 => 188,
      16 => 2301,
      17 => 2060,
      18 => 5860,
      19 => 6796,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/40/4c003ec4331bd.jpg',
  ],
  1009360 => 
  [
    'name' => 'Hydro-Man',
    'description' => '',
    'series' => 
    [
      0 => 2121,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/f0/4c003ec140c31.jpg',
  ],
  1009361 => 
  [
    'name' => 'Hyperion (Earth-712)',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 354,
      2 => 1340,
      3 => 3743,
      4 => 3741,
      5 => 479,
      6 => 1462,
      7 => 2059,
      8 => 2431,
      9 => 2702,
      10 => 944,
      11 => 1791,
      12 => 3684,
      13 => 1136,
      14 => 2554,
      15 => 3685,
      16 => 942,
      17 => 18527,
      18 => 2427,
      19 => 1124,
    ],
    'img' => false,
  ],
  1009362 => 
  [
    'name' => 'Iceman',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 744,
      2 => 1991,
      3 => 354,
      4 => 1737,
      5 => 1995,
      6 => 4002,
      7 => 2001,
      8 => 1720,
      9 => 1721,
      10 => 1067,
      11 => 3874,
      12 => 378,
      13 => 1806,
      14 => 1427,
      15 => 14400,
      16 => 2011,
      17 => 2121,
      18 => 9895,
      19 => 2016,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/d0/52696c836898c.jpg',
  ],
  1009363 => 
  [
    'name' => 'Imperial Guard',
    'description' => '',
    'series' => 
    [
      0 => 421,
      1 => 2445,
      2 => 2258,
      3 => 3648,
      4 => 2265,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/30/539a0286b06bf.jpg',
  ],
  1009364 => 
  [
    'name' => 'Impossible Man',
    'description' => '',
    'series' => 
    [
      0 => 14398,
      1 => 3374,
      2 => 13508,
      3 => 2983,
      4 => 2039,
      5 => 3715,
      6 => 2053,
      7 => 11151,
      8 => 1920,
      9 => 2094,
      10 => 3648,
      11 => 2100,
      12 => 343,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/90/4c003eb8e1d23.jpg',
  ],
  1009365 => 
  [
    'name' => 'Inhumans',
    'description' => '',
    'series' => 
    [
      0 => 6666,
      1 => 3621,
      2 => 1263,
      3 => 1427,
      4 => 421,
      5 => 2121,
      6 => 2123,
      7 => 2012,
      8 => 2445,
      9 => 965,
      10 => 13440,
      11 => 1812,
      12 => 2027,
      13 => 637,
      14 => 47,
      15 => 3719,
      16 => 1346,
      17 => 2561,
      18 => 6041,
      19 => 6040,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/a0/526033a73dca3.jpg',
  ],
  1009366 => 
  [
    'name' => 'Invisible Woman',
    'description' => '',
    'series' => 
    [
      0 => 725,
      1 => 1253,
      2 => 6079,
      3 => 7524,
      4 => 13896,
      5 => 2116,
      6 => 1983,
      7 => 454,
      8 => 10030,
      9 => 10031,
      10 => 1991,
      11 => 354,
      12 => 1340,
      13 => 1496,
      14 => 1816,
      15 => 1503,
      16 => 784,
      17 => 2115,
      18 => 2226,
      19 => 1726,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/a0/52695b9cd40b6.jpg',
  ],
  1009367 => 
  [
    'name' => 'Iron Fist (Danny Rand)',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 9086,
      2 => 15305,
      3 => 12973,
      4 => 2115,
      5 => 832,
      6 => 5061,
      7 => 3127,
      8 => 1067,
      9 => 2002,
      10 => 449,
      11 => 1911,
      12 => 22,
      13 => 9045,
      14 => 12988,
      15 => 3743,
      16 => 14701,
      17 => 1313,
      18 => 1760,
      19 => 13691,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/f0/52616788ebc63.jpg',
  ],
  1009368 => 
  [
    'name' => 'Iron Man',
    'description' => 'Wounded, captured and forced to build a weapon by his enemies, billionaire industrialist Tony Stark instead created an advanced suit of armor to save his life and escape captivity. Now with a new outlook on life, Tony uses his money and intelligence to make the world a safer, better place as Iron Man.',
    'series' => 
    [
      0 => 7524,
      1 => 6079,
      2 => 13896,
      3 => 4897,
      4 => 2116,
      5 => 454,
      6 => 6056,
      7 => 14779,
      8 => 9792,
      9 => 6792,
      10 => 6697,
      11 => 6698,
      12 => 6696,
      13 => 744,
      14 => 7576,
      15 => 354,
      16 => 3621,
      17 => 1991,
      18 => 9085,
      19 => 9086,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/c0/527bb7b37ff55.jpg',
  ],
  1009371 => 
  [
    'name' => 'Iron Monger',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009372 => 
  [
    'name' => 'J. Jonah Jameson',
    'description' => '',
    'series' => 
    [
      0 => 10235,
      1 => 672,
      2 => 13383,
      3 => 454,
      4 => 2984,
      5 => 1945,
      6 => 14246,
      7 => 449,
      8 => 20,
      9 => 4767,
      10 => 3891,
      11 => 2572,
      12 => 1389,
      13 => 1866,
      14 => 5381,
      15 => 753,
      16 => 1446,
      17 => 2067,
      18 => 1921,
      19 => 6684,
    ],
    'img' => '.',
  ],
  1009373 => 
  [
    'name' => 'Jetstream',
    'description' => '',
    'series' => 
    [
      0 => 2258,
    ],
    'img' => false,
  ],
  1009374 => 
  [
    'name' => 'Jigsaw',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 2059,
      2 => 2431,
      3 => 6681,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/30/4ce188192a0b6.jpg',
  ],
  1009375 => 
  [
    'name' => 'Joan the Mouse',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009376 => 
  [
    'name' => 'Jocasta',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 9086,
      2 => 94,
      3 => 1945,
      4 => 13881,
      5 => 2572,
      6 => 3715,
      7 => 1866,
      8 => 886,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/a0/4c003eac7419a.jpg',
  ],
  1009377 => 
  [
    'name' => 'Gabe Jones',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/f0/4ce5a0155d904.jpg',
  ],
  1009378 => 
  [
    'name' => 'Jessica Jones',
    'description' => '',
    'series' => 
    [
      0 => 672,
      1 => 13383,
      2 => 454,
      3 => 9864,
      4 => 832,
      5 => 5061,
      6 => 3127,
      7 => 9922,
      8 => 753,
      9 => 13315,
      10 => 1446,
      11 => 1630,
      12 => 14698,
      13 => 674,
      14 => 1259,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/00/5390e41260345.jpg',
  ],
  1009379 => 
  [
    'name' => 'Rick Jones',
    'description' => '',
    'series' => 
    [
      0 => 672,
      1 => 13383,
      2 => 1991,
      3 => 354,
      4 => 1340,
      5 => 1737,
      6 => 98,
      7 => 832,
      8 => 1996,
      9 => 5061,
      10 => 3127,
      11 => 2582,
      12 => 3463,
      13 => 3461,
      14 => 2021,
      15 => 2983,
      16 => 8842,
      17 => 2039,
      18 => 1696,
      19 => 1683,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/e0/5274112b036ff.jpg',
  ],
  1009380 => 
  [
    'name' => 'Joseph',
    'description' => '',
    'series' => 
    [
      0 => 14683,
      1 => 2057,
      2 => 2258,
      3 => 2265,
      4 => 4020,
      5 => 2106,
      6 => 5395,
      7 => 6430,
      8 => 3319,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/00/5260339868b8c.jpg',
  ],
  1009381 => 
  [
    'name' => 'Jubilee',
    'description' => '',
    'series' => 
    [
      0 => 3874,
      1 => 776,
      2 => 1595,
      3 => 1430,
      4 => 2258,
      5 => 2262,
      6 => 13029,
      7 => 14305,
      8 => 317,
      9 => 8086,
      10 => 9367,
      11 => 2098,
      12 => 2265,
      13 => 403,
      14 => 9906,
      15 => 2100,
      16 => 3640,
      17 => 9738,
      18 => 3754,
      19 => 3637,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/c0/4e7a2148b6e59.jpg',
  ],
  1009382 => 
  [
    'name' => 'Juggernaut',
    'description' => '',
    'series' => 
    [
      0 => 6666,
      1 => 454,
      2 => 354,
      3 => 9086,
      4 => 1737,
      5 => 1990,
      6 => 1143,
      7 => 2241,
      8 => 158,
      9 => 15305,
      10 => 16230,
      11 => 7,
      12 => 8,
      13 => 485,
      14 => 251,
      15 => 690,
      16 => 175,
      17 => 105,
      18 => 3874,
      19 => 3751,
    ],
    'img' => '.',
  ],
  1009383 => 
  [
    'name' => 'Garrison Kane',
    'description' => '',
    'series' => 
    [
      0 => 1995,
      1 => 4059,
      2 => 6668,
      3 => 163,
      4 => 138,
      5 => 3650,
      6 => 3651,
      7 => 3652,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/f0/4c003e9db374b.jpg',
  ],
  1009384 => 
  [
    'name' => 'Kang',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 3621,
      2 => 1991,
      3 => 354,
      4 => 1988,
      5 => 1816,
      6 => 2929,
      7 => 2111,
      8 => 93,
      9 => 13411,
      10 => 6476,
      11 => 6473,
      12 => 1537,
      13 => 98,
      14 => 1997,
      15 => 3629,
      16 => 2121,
      17 => 2012,
      18 => 2254,
      19 => 1813,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/30/52695ed19538d.jpg',
  ],
  1009385 => 
  [
    'name' => 'Karnak',
    'description' => '',
    'series' => 
    [
      0 => 9086,
      1 => 2002,
      2 => 378,
      3 => 1806,
      4 => 2121,
      5 => 2123,
      6 => 421,
      7 => 2445,
      8 => 1812,
      9 => 2027,
      10 => 3719,
      11 => 3715,
      12 => 2059,
      13 => 2431,
      14 => 13604,
      15 => 2258,
      16 => 2098,
      17 => 6689,
      18 => 1581,
    ],
    'img' => '.',
  ],
  1009386 => 
  [
    'name' => 'Khan',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009387 => 
  [
    'name' => 'Quentin Quire',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/40/4c003d7fc6294.jpg',
  ],
  1009388 => 
  [
    'name' => 'King Bedlam',
    'description' => '',
    'series' => 
    [
      0 => 3633,
    ],
    'img' => false,
  ],
  1009389 => 
  [
    'name' => 'Kingpin',
    'description' => '',
    'series' => 
    [
      0 => 1126,
      1 => 2234,
      2 => 1987,
      3 => 454,
      4 => 11665,
      5 => 2246,
      6 => 1150,
      7 => 2002,
      8 => 449,
      9 => 1911,
      10 => 18,
      11 => 1170,
      12 => 181,
      13 => 19,
      14 => 20,
      15 => 21,
      16 => 22,
      17 => 3897,
      18 => 5701,
      19 => 1427,
    ],
    'img' => '.',
  ],
  1009390 => 
  [
    'name' => 'Klaw',
    'description' => '',
    'series' => 
    [
      0 => 3621,
      1 => 1991,
      2 => 6804,
      3 => 1997,
      4 => 2002,
      5 => 378,
      6 => 1806,
      7 => 2121,
      8 => 1813,
      9 => 11893,
      10 => 12974,
      11 => 3719,
      12 => 1708,
      13 => 753,
      14 => 1446,
      15 => 2059,
      16 => 2431,
      17 => 2063,
      18 => 2715,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/20/526034e1c6ede.jpg',
  ],
  1009391 => 
  [
    'name' => 'Kraven the Hunter',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 1987,
      2 => 6604,
      3 => 14985,
      4 => 2005,
      5 => 1427,
      6 => 1494,
      7 => 2301,
      8 => 2271,
      9 => 2069,
      10 => 325,
      11 => 2071,
      12 => 69,
      13 => 2072,
      14 => 3679,
      15 => 2079,
      16 => 2725,
      17 => 14313,
      18 => 2093,
    ],
    'img' => '.',
  ],
  1009392 => 
  [
    'name' => 'La Nuit',
    'description' => '',
    'series' => 
    [
      0 => 3633,
      1 => 88,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/10/4c003d76b5ec6.jpg',
  ],
  1009393 => 
  [
    'name' => 'Lady Deathstrike',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 1997,
      2 => 14388,
      3 => 1815,
      4 => 13745,
      5 => 681,
      6 => 1465,
      7 => 9799,
      8 => 2258,
      9 => 3648,
      10 => 2262,
      11 => 2265,
      12 => 3637,
      13 => 139,
      14 => 14362,
      15 => 14364,
      16 => 646,
      17 => 241,
      18 => 257,
    ],
    'img' => '.',
  ],
  1009394 => 
  [
    'name' => 'Lake',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009395 => 
  [
    'name' => 'Landau',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009396 => 
  [
    'name' => 'Eddie Lau',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009397 => 
  [
    'name' => 'Lava-Man',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009398 => 
  [
    'name' => 'Leader',
    'description' => '',
    'series' => 
    [
      0 => 378,
      1 => 1806,
      2 => 1586,
      3 => 2021,
      4 => 465,
      5 => 2983,
      6 => 8842,
      7 => 2300,
      8 => 2094,
      9 => 3648,
      10 => 2095,
      11 => 2262,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/c0/52b0d25c3dbb9.jpg',
  ],
  1009399 => 
  [
    'name' => 'Legion',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 11477,
      2 => 2055,
      3 => 7455,
      4 => 4603,
      5 => 13519,
      6 => 3694,
      7 => 2258,
      8 => 3648,
      9 => 2098,
      10 => 6689,
      11 => 2265,
      12 => 2100,
      13 => 16791,
      14 => 3754,
      15 => 14343,
      16 => 139,
      17 => 2101,
      18 => 13503,
      19 => 1685,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/30/526547cc31b36.jpg',
  ],
  1009401 => 
  [
    'name' => 'Lifeguard',
    'description' => '',
    'series' => 
    [
      0 => 646,
      1 => 142,
      2 => 143,
    ],
    'img' => '.',
  ],
  1009402 => 
  [
    'name' => 'Lilandra',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1816,
      2 => 690,
      3 => 175,
      4 => 105,
      5 => 3751,
      6 => 2011,
      7 => 2121,
      8 => 3293,
      9 => 2445,
      10 => 2027,
      11 => 1440,
      12 => 1595,
      13 => 1637,
      14 => 2049,
      15 => 3706,
      16 => 1137,
      17 => 4906,
      18 => 1763,
      19 => 1807,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/20/52740ff3f2c50.jpg',
  ],
  1009403 => 
  [
    'name' => 'Liz Osborn',
    'description' => '',
    'series' => 
    [
      0 => 454,
    ],
    'img' => false,
  ],
  1009404 => 
  [
    'name' => 'Lizard',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 454,
      2 => 2984,
      3 => 1967,
      4 => 479,
      5 => 154,
      6 => 9748,
      7 => 1703,
      8 => 292,
      9 => 3716,
      10 => 3711,
      11 => 2271,
      12 => 15297,
      13 => 2063,
      14 => 2069,
      15 => 3681,
      16 => 130,
      17 => 10439,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/50/528d33efe2cae.jpg',
  ],
  1009405 => 
  [
    'name' => 'Lockheed',
    'description' => '',
    'series' => 
    [
      0 => 744,
      1 => 7576,
      2 => 1464,
      3 => 1422,
      4 => 13032,
      5 => 2011,
      6 => 4935,
      7 => 1582,
      8 => 2063,
      9 => 2083,
      10 => 2258,
      11 => 2262,
      12 => 1849,
      13 => 7056,
      14 => 8086,
      15 => 2715,
      16 => 2100,
      17 => 211,
      18 => 242,
      19 => 4919,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/7/20/4c7c6465c79c5.png',
  ],
  1009406 => 
  [
    'name' => 'Lockjaw',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 13032,
      2 => 378,
      3 => 1806,
      4 => 1263,
      5 => 421,
      6 => 2123,
      7 => 2121,
      8 => 2012,
      9 => 2445,
      10 => 1812,
      11 => 2027,
      12 => 2039,
      13 => 1697,
      14 => 1346,
      15 => 11717,
      16 => 3667,
      17 => 2098,
      18 => 6689,
      19 => 1581,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/20/4c003d64a5a99.jpg',
  ],
  1009407 => 
  [
    'name' => 'Loki',
    'description' => '',
    'series' => 
    [
      0 => 9865,
      1 => 2116,
      2 => 454,
      3 => 1292,
      4 => 1291,
      5 => 3621,
      6 => 1991,
      7 => 1988,
      8 => 3623,
      9 => 3462,
      10 => 2115,
      11 => 13689,
      12 => 2005,
      13 => 3741,
      14 => 378,
      15 => 1806,
      16 => 13691,
      17 => 15595,
      18 => 1813,
      19 => 1814,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/90/526547f509313.jpg',
  ],
  1009408 => 
  [
    'name' => 'Longshot',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 479,
      2 => 2553,
      3 => 5861,
      4 => 2039,
      5 => 3719,
      6 => 13519,
      7 => 2258,
      8 => 1777,
      9 => 2715,
      10 => 2098,
      11 => 3633,
      12 => 2265,
      13 => 2100,
      14 => 211,
      15 => 242,
      16 => 3637,
      17 => 139,
      18 => 6045,
      19 => 1774,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/60/4c003d6176aa1.jpg',
  ],
  1009409 => 
  [
    'name' => 'Luckman',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009410 => 
  [
    'name' => 'Moira MacTaggert',
    'description' => '',
    'series' => 
    [
      0 => 3874,
      1 => 7455,
      2 => 2258,
      3 => 3633,
      4 => 4773,
      5 => 1318,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/d0/4c003d5e64f22.jpg',
  ],
  1009411 => 
  [
    'name' => 'Mad Thinker',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 1996,
      2 => 2121,
      3 => 9718,
      4 => 188,
      5 => 1712,
      6 => 2076,
      7 => 2989,
      8 => 2083,
      9 => 1225,
      10 => 3648,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/c0/52740faf0d0fb.jpg',
  ],
  1009412 => 
  [
    'name' => 'Madame Hydra',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/20/4d5c39a54b1dd.jpg',
  ],
  1009413 => 
  [
    'name' => 'Madrox',
    'description' => '',
    'series' => 
    [
      0 => 762,
      1 => 1276,
      2 => 1035,
      3 => 15266,
      4 => 2930,
      5 => 1882,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/30/52740fc5a4c7c.jpg',
  ],
  1009414 => 
  [
    'name' => 'Maggott',
    'description' => '',
    'series' => 
    [
      0 => 2258,
      1 => 3633,
      2 => 2265,
    ],
    'img' => false,
  ],
  1009415 => 
  [
    'name' => 'Magik (Illyana Rasputin)',
    'description' => '',
    'series' => 
    [
      0 => 15305,
      1 => 3719,
      2 => 2301,
      3 => 1595,
      4 => 11477,
      5 => 2055,
      6 => 7455,
      7 => 2258,
      8 => 17602,
      9 => 9981,
      10 => 2101,
      11 => 1685,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/b0/52695ca8391cc.jpg',
  ],
  1009416 => 
  [
    'name' => 'Magma (Amara Aquilla)',
    'description' => '',
    'series' => 
    [
      0 => 3716,
      1 => 563,
      2 => 11477,
      3 => 7455,
      4 => 2055,
      5 => 4603,
      6 => 1186,
      7 => 267,
      8 => 2258,
      9 => 2715,
      10 => 3633,
      11 => 2100,
      12 => 211,
      13 => 242,
      14 => 343,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/20/4c003d55e4ce8.jpg',
  ],
  1009417 => 
  [
    'name' => 'Magneto',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 1991,
      2 => 9086,
      3 => 15305,
      4 => 16230,
      5 => 3623,
      6 => 3462,
      7 => 10056,
      8 => 9864,
      9 => 2115,
      10 => 1995,
      11 => 3874,
      12 => 3751,
      13 => 378,
      14 => 1806,
      15 => 14388,
      16 => 740,
      17 => 9895,
      18 => 18407,
      19 => 13342,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/b0/5261a7e53f827.jpg',
  ],
  1009418 => 
  [
    'name' => 'Ma Gnuci',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009420 => 
  [
    'name' => 'Man-Thing',
    'description' => '',
    'series' => 
    [
      0 => 2002,
      1 => 3741,
      2 => 14022,
      3 => 3891,
      4 => 4766,
      5 => 4767,
      6 => 3883,
      7 => 2021,
      8 => 757,
      9 => 2039,
      10 => 1542,
      11 => 3719,
      12 => 3459,
      13 => 3460,
      14 => 3718,
      15 => 3715,
      16 => 5850,
      17 => 18527,
      18 => 13143,
      19 => 2258,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/c0/4ce5a043191dc.jpg',
  ],
  1009421 => 
  [
    'name' => 'Mandarin',
    'description' => '',
    'series' => 
    [
      0 => 1995,
      1 => 1814,
      2 => 2021,
      3 => 4889,
      4 => 2029,
      5 => 13577,
      6 => 2572,
      7 => 2860,
      8 => 6049,
      9 => 2039,
      10 => 1506,
      11 => 189,
      12 => 2247,
      13 => 1494,
      14 => 3300,
      15 => 222,
      16 => 2300,
      17 => 2079,
      18 => 2725,
      19 => 2258,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/50/535feda892f68.jpg',
  ],
  1009422 => 
  [
    'name' => 'Mandroid',
    'description' => '',
    'series' => 
    [
      0 => 1440,
      1 => 2258,
      2 => 1723,
    ],
    'img' => false,
  ],
  1009423 => 
  [
    'name' => 'Manta',
    'description' => '',
    'series' => 
    [
      0 => 1440,
      1 => 1807,
      2 => 2281,
      3 => 1166,
      4 => 2258,
      5 => 1775,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/90/4c003d5308145.jpg',
  ],
  1009424 => 
  [
    'name' => 'Marauders',
    'description' => '',
    'series' => 
    [
      0 => 10491,
      1 => 2258,
      2 => 14362,
      3 => 14364,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/70/52b0d48aaecb1.jpg',
  ],
  1009425 => 
  [
    'name' => 'Marrow',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1340,
      2 => 1995,
      3 => 2011,
      4 => 2060,
      5 => 2258,
      6 => 163,
      7 => 138,
      8 => 3651,
      9 => 3649,
      10 => 2262,
      11 => 84,
      12 => 3633,
      13 => 2265,
      14 => 3637,
      15 => 4020,
      16 => 5761,
      17 => 2106,
      18 => 2102,
      19 => 1685,
    ],
    'img' => '.',
  ],
  1009427 => 
  [
    'name' => 'Marvel Boy',
    'description' => '',
    'series' => 
    [
      0 => 1097,
      1 => 6807,
      2 => 1980,
      3 => 6056,
      4 => 2982,
      5 => 2111,
      6 => 93,
      7 => 4776,
      8 => 6599,
      9 => 2121,
      10 => 2036,
      11 => 2309,
      12 => 5841,
      13 => 5840,
      14 => 1836,
      15 => 2300,
      16 => 12199,
      17 => 12452,
      18 => 6682,
      19 => 3695,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/7/d0/4c003d4a0e1c0.jpg',
  ],
  1009430 => 
  [
    'name' => 'Rachel Grey',
    'description' => '',
    'series' => 
    [
      0 => 2011,
      1 => 479,
      2 => 154,
      3 => 2121,
      4 => 2016,
      5 => 2039,
      6 => 1440,
      7 => 179,
      8 => 1689,
      9 => 8133,
      10 => 3668,
      11 => 2258,
      12 => 1413,
      13 => 1805,
      14 => 1723,
      15 => 2555,
      16 => 632,
      17 => 8086,
      18 => 1771,
      19 => 2098,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/10/52741143108e7.jpg',
  ],
  1009433 => 
  [
    'name' => 'Master Mold',
    'description' => '',
    'series' => 
    [
      0 => 206,
      1 => 2281,
      2 => 1807,
      3 => 2258,
      4 => 139,
    ],
    'img' => false,
  ],
  1009434 => 
  [
    'name' => 'Mastermind',
    'description' => '',
    'series' => 
    [
      0 => 6666,
      1 => 378,
      2 => 1806,
      3 => 1440,
      4 => 179,
      5 => 6041,
      6 => 6040,
      7 => 753,
      8 => 1417,
      9 => 367,
      10 => 2258,
      11 => 1723,
      12 => 2262,
      13 => 7056,
      14 => 1849,
      15 => 2098,
      16 => 9906,
      17 => 2265,
      18 => 10605,
      19 => 3637,
    ],
    'img' => '.',
  ],
  1009435 => 
  [
    'name' => 'Alicia Masters',
    'description' => '',
    'series' => 
    [
      0 => 3292,
      1 => 2579,
      2 => 14102,
      3 => 3715,
      4 => 3667,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/40/4c003d40ac7ae.jpg',
  ],
  1009436 => 
  [
    'name' => 'Mauler',
    'description' => '',
    'series' => 
    [
      0 => 2116,
    ],
    'img' => false,
  ],
  1009437 => 
  [
    'name' => 'Maverick (Christoph Nord)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009438 => 
  [
    'name' => 'Medusa',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 1991,
      2 => 9085,
      3 => 9086,
      4 => 997,
      5 => 1928,
      6 => 378,
      7 => 1806,
      8 => 1427,
      9 => 2123,
      10 => 421,
      11 => 2121,
      12 => 2445,
      13 => 6672,
      14 => 1812,
      15 => 18065,
      16 => 2027,
      17 => 2231,
      18 => 1102,
      19 => 1389,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/30/537bb549bebd0.jpg',
  ],
  1009439 => 
  [
    'name' => 'Meltdown',
    'description' => 'When Tabitha Smith\'s mutant nature manifested at age 13, she ran away from her abusive home before eventually hooking up with the New Mutants and, subsequently, X-Force.',
    'series' => 
    [
      0 => 1995,
      1 => 5260,
      2 => 2258,
      3 => 3633,
      4 => 88,
      5 => 4020,
      6 => 1318,
      7 => 4919,
      8 => 5395,
      9 => 3284,
    ],
    'img' => false,
  ],
  1009440 => 
  [
    'name' => 'Mephisto',
    'description' => '',
    'series' => 
    [
      0 => 2111,
      1 => 93,
      2 => 2115,
      3 => 1998,
      4 => 449,
      5 => 2002,
      6 => 18,
      7 => 3741,
      8 => 14475,
      9 => 2121,
      10 => 1760,
      11 => 6449,
      12 => 14764,
      13 => 3719,
      14 => 2059,
      15 => 2702,
      16 => 2288,
      17 => 2083,
      18 => 581,
      19 => 2978,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/40/526034d178ddc.jpg',
  ],
  1009441 => 
  [
    'name' => 'Mephistopheles',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009442 => 
  [
    'name' => 'Mesmero',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 3751,
      2 => 1440,
      3 => 2258,
      4 => 1723,
      5 => 163,
      6 => 138,
      7 => 3651,
      8 => 3652,
      9 => 3653,
      10 => 3649,
      11 => 3648,
      12 => 2098,
      13 => 2265,
      14 => 1460,
      15 => 1774,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/70/4c003d3b033e8.jpg',
  ],
  1009443 => 
  [
    'name' => 'Metal Master',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009444 => 
  [
    'name' => 'Micro/Macro',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009445 => 
  [
    'name' => 'Mimic',
    'description' => '',
    'series' => 
    [
      0 => 2011,
      1 => 479,
      2 => 1462,
      3 => 1563,
      4 => 154,
      5 => 116,
      6 => 206,
      7 => 14485,
      8 => 14486,
      9 => 249,
      10 => 2258,
      11 => 6688,
      12 => 3633,
      13 => 2265,
    ],
    'img' => false,
  ],
  1009446 => 
  [
    'name' => 'Mister Fear',
    'description' => '',
    'series' => 
    [
      0 => 449,
    ],
    'img' => false,
  ],
  1009447 => 
  [
    'name' => 'Mister Sinister',
    'description' => '',
    'series' => 
    [
      0 => 3614,
      1 => 1995,
      2 => 2011,
      3 => 479,
      4 => 116,
      5 => 787,
      6 => 14914,
      7 => 2258,
      8 => 3648,
      9 => 2098,
      10 => 6689,
      11 => 1581,
      12 => 3633,
      13 => 403,
      14 => 2265,
      15 => 3640,
      16 => 9978,
      17 => 10599,
      18 => 2104,
      19 => 5242,
    ],
    'img' => '.',
  ],
  1009448 => 
  [
    'name' => 'Mojo',
    'description' => '',
    'series' => 
    [
      0 => 9994,
      1 => 9995,
      2 => 6792,
      3 => 1768,
      4 => 3736,
      5 => 5861,
      6 => 2039,
      7 => 13519,
      8 => 2258,
      9 => 2262,
      10 => 6689,
      11 => 3633,
      12 => 2265,
      13 => 2100,
      14 => 211,
      15 => 242,
      16 => 3637,
      17 => 139,
      18 => 6045,
      19 => 1774,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/a0/4c003d3444dce.jpg',
  ],
  1009449 => 
  [
    'name' => 'Mole Man',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 14246,
      2 => 9120,
      3 => 2123,
      4 => 2121,
      5 => 3292,
      6 => 3293,
      7 => 2579,
      8 => 5253,
      9 => 1812,
      10 => 2021,
      11 => 8842,
      12 => 1507,
      13 => 3298,
      14 => 270,
      15 => 3300,
      16 => 1698,
      17 => 3715,
      18 => 1866,
      19 => 5381,
    ],
    'img' => '.',
  ],
  1009450 => 
  [
    'name' => 'Mongu (Unrevealed)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009451 => 
  [
    'name' => 'Moondragon',
    'description' => '',
    'series' => 
    [
      0 => 3613,
      1 => 3061,
      2 => 1991,
      3 => 354,
      4 => 1340,
      5 => 1737,
      6 => 1816,
      7 => 2029,
      8 => 6686,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/a0/4c003d2ebd6c5.jpg',
  ],
  1009452 => 
  [
    'name' => 'Moon Knight',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 2984,
      2 => 354,
      3 => 9368,
      4 => 3743,
      5 => 3741,
      6 => 1427,
      7 => 14074,
      8 => 13330,
      9 => 7251,
      10 => 13839,
      11 => 2029,
      12 => 11893,
      13 => 12974,
      14 => 2039,
      15 => 3719,
      16 => 2576,
      17 => 3717,
      18 => 2301,
      19 => 813,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/30/52028af90e516.jpg',
  ],
  1009453 => 
  [
    'name' => 'Dani Moonstar',
    'description' => '',
    'series' => 
    [
      0 => 378,
      1 => 1806,
      2 => 14388,
      3 => 2011,
      4 => 7455,
      5 => 11477,
      6 => 749,
      7 => 3694,
    ],
    'img' => '.',
  ],
  1009454 => 
  [
    'name' => 'Morbius',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 1987,
      2 => 1249,
      3 => 2002,
      4 => 3741,
      5 => 1765,
      6 => 1427,
      7 => 2121,
      8 => 1505,
      9 => 3732,
      10 => 9914,
      11 => 2039,
      12 => 3718,
      13 => 2271,
      14 => 2060,
      15 => 2089,
    ],
    'img' => '.',
  ],
  1009455 => 
  [
    'name' => 'Morg',
    'description' => '',
    'series' => 
    [
      0 => 2288,
    ],
    'img' => false,
  ],
  1009456 => 
  [
    'name' => 'Morph',
    'description' => '',
    'series' => 
    [
      0 => 479,
      1 => 1462,
      2 => 2553,
      3 => 154,
      4 => 116,
      5 => 3640,
      6 => 2104,
      7 => 2101,
      8 => 1452,
      9 => 1583,
      10 => 1685,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/10/4ce5a06d6a8ad.jpg',
  ],
  1009457 => 
  [
    'name' => 'Mother Askani',
    'description' => '',
    'series' => 
    [
      0 => 1995,
    ],
    'img' => false,
  ],
  1009458 => 
  [
    'name' => 'Mr. Bumpo',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009459 => 
  [
    'name' => 'Mr. Fantastic',
    'description' => '',
    'series' => 
    [
      0 => 725,
      1 => 1253,
      2 => 6079,
      3 => 7524,
      4 => 2116,
      5 => 1983,
      6 => 454,
      7 => 9085,
      8 => 1991,
      9 => 354,
      10 => 3621,
      11 => 1816,
      12 => 6476,
      13 => 6473,
      14 => 1503,
      15 => 784,
      16 => 1726,
      17 => 1995,
      18 => 693,
      19 => 13261,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/c0/51127e9337538.jpg',
  ],
  1009460 => 
  [
    'name' => 'Mr. Fixit',
    'description' => '',
    'series' => 
    [
      0 => 465,
    ],
    'img' => false,
  ],
  1009461 => 
  [
    'name' => 'Mr. Payback',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009462 => 
  [
    'name' => 'Mr. X',
    'description' => '',
    'series' => 
    [
      0 => 1996,
      1 => 10144,
      2 => 2262,
      3 => 85,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/30/4ce5a07872800.jpg',
  ],
  1009463 => 
  [
    'name' => 'Matthew Murdock',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009464 => 
  [
    'name' => 'Mysterio',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 454,
      2 => 3753,
      3 => 449,
      4 => 18,
      5 => 877,
      6 => 1895,
      7 => 2572,
      8 => 2301,
      9 => 2271,
      10 => 2060,
      11 => 1979,
      12 => 10445,
      13 => 13511,
      14 => 3679,
      15 => 581,
      16 => 2093,
      17 => 6688,
      18 => 5761,
    ],
    'img' => '.',
  ],
  1009465 => 
  [
    'name' => 'Mystique',
    'description' => '',
    'series' => 
    [
      0 => 1995,
      1 => 3719,
      2 => 2301,
      3 => 8133,
      4 => 8138,
      5 => 569,
      6 => 13509,
      7 => 13510,
      8 => 1185,
      9 => 1322,
      10 => 1323,
      11 => 1256,
      12 => 2258,
      13 => 2262,
      14 => 9962,
      15 => 84,
      16 => 3644,
      17 => 2098,
      18 => 6689,
      19 => 3633,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/03/5390dc2225782.jpg',
  ],
  1009466 => 
  [
    'name' => 'Namor',
    'description' => '',
    'series' => 
    [
      0 => 2038,
      1 => 288,
      2 => 16451,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/90/50febf4ae101d.jpg',
  ],
  1009468 => 
  [
    'name' => 'Namora',
    'description' => '',
    'series' => 
    [
      0 => 1097,
      1 => 1980,
      2 => 6807,
      3 => 14985,
      4 => 1998,
      5 => 2020,
      6 => 465,
      7 => 2981,
      8 => 9974,
      9 => 9922,
      10 => 2989,
      11 => 2077,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/a0/4c003d248f331.jpg',
  ],
  1009469 => 
  [
    'name' => 'Namorita',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1991,
      2 => 1816,
      3 => 4864,
      4 => 98,
      5 => 421,
      6 => 2121,
      7 => 2039,
      8 => 3715,
      9 => 2049,
      10 => 2053,
      11 => 839,
      12 => 1410,
      13 => 2989,
      14 => 3674,
      15 => 2083,
      16 => 6689,
      17 => 3633,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/03/528d33a253447.jpg',
  ],
  1009470 => 
  [
    'name' => 'Foggy Nelson',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1737,
      2 => 15691,
      3 => 449,
      4 => 18,
      5 => 19,
      6 => 2572,
    ],
    'img' => '.',
  ],
  1009471 => 
  [
    'name' => 'Nick Fury',
    'description' => '',
    'series' => 
    [
      0 => 6056,
      1 => 744,
      2 => 7576,
      3 => 1464,
      4 => 1298,
      5 => 3621,
      6 => 354,
      7 => 14985,
      8 => 2111,
      9 => 93,
      10 => 158,
      11 => 4864,
      12 => 1945,
      13 => 15370,
      14 => 758,
      15 => 2272,
      16 => 1270,
      17 => 5,
      18 => 2424,
      19 => 994,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/c0/5261a745e658d.jpg',
  ],
  1009472 => 
  [
    'name' => 'Nightcrawler',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 1983,
      2 => 1987,
      3 => 354,
      4 => 1340,
      5 => 1816,
      6 => 1990,
      7 => 158,
      8 => 1995,
      9 => 4002,
      10 => 7,
      11 => 8,
      12 => 485,
      13 => 251,
      14 => 690,
      15 => 175,
      16 => 105,
      17 => 3874,
      18 => 3751,
      19 => 378,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/40/526034979bc98.jpg',
  ],
  1009473 => 
  [
    'name' => 'Nightmare',
    'description' => '',
    'series' => 
    [
      0 => 1945,
      1 => 3741,
      2 => 2011,
      3 => 2021,
      4 => 2039,
      5 => 3719,
      6 => 2576,
      7 => 188,
      8 => 2076,
      9 => 2083,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/40/4c003d1b26622.jpg',
  ],
  1009474 => 
  [
    'name' => 'Nocturne',
    'description' => '',
    'series' => 
    [
      0 => 479,
      1 => 154,
      2 => 116,
      3 => 935,
      4 => 1549,
      5 => 1897,
      6 => 3267,
    ],
    'img' => false,
  ],
  1009475 => 
  [
    'name' => 'Nomad',
    'description' => '',
    'series' => 
    [
      0 => 2722,
      1 => 832,
      2 => 3629,
      3 => 12115,
      4 => 1612,
      5 => 2039,
      6 => 13602,
      7 => 15490,
      8 => 5860,
      9 => 2095,
      10 => 3648,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/50/4c003d1875f38.jpg',
  ],
  1009476 => 
  [
    'name' => 'Northstar',
    'description' => '',
    'series' => 
    [
      0 => 3614,
      1 => 13907,
      2 => 2116,
      3 => 1983,
      4 => 744,
      5 => 13260,
      6 => 2039,
      7 => 1440,
      8 => 563,
      9 => 1186,
      10 => 267,
      11 => 2258,
      12 => 1723,
      13 => 184,
      14 => 2262,
      15 => 8086,
      16 => 2098,
      17 => 9906,
      18 => 1319,
      19 => 13880,
    ],
    'img' => '.',
  ],
  1009477 => 
  [
    'name' => 'Nova',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 1987,
      2 => 3613,
      3 => 6056,
      4 => 354,
      5 => 1496,
      6 => 1737,
      7 => 1816,
      8 => 12973,
      9 => 3743,
      10 => 3741,
      11 => 2121,
      12 => 3293,
      13 => 13065,
      14 => 3289,
      15 => 2029,
      16 => 923,
      17 => 1540,
      18 => 9718,
      19 => 10315,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/00/51756578d2a75.jpg',
  ],
  1009478 => 
  [
    'name' => 'Cassandra Nova',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/60/4c003d0f3c80c.jpg',
  ],
  1009479 => 
  [
    'name' => 'Otto Octavius',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009480 => 
  [
    'name' => 'Odin',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 15274,
      2 => 2115,
      3 => 832,
      4 => 378,
      5 => 1806,
      6 => 14475,
      7 => 2121,
      8 => 3293,
      9 => 13691,
      10 => 15595,
      11 => 14764,
      12 => 2032,
      13 => 13569,
      14 => 10830,
      15 => 1390,
      16 => 14509,
      17 => 14516,
      18 => 3301,
      19 => 1588,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/00/539a06a64b262.jpg',
  ],
  1009481 => 
  [
    'name' => 'Ogun',
    'description' => '',
    'series' => 
    [
      0 => 3741,
      1 => 2011,
      2 => 2258,
      3 => 2262,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/a0/4c003d0c92efb.jpg',
  ],
  1009482 => 
  [
    'name' => 'Omega Red',
    'description' => '',
    'series' => 
    [
      0 => 1995,
      1 => 3874,
      2 => 2002,
      3 => 2258,
      4 => 2262,
      5 => 2098,
      6 => 2265,
      7 => 4773,
      8 => 1774,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/d0/4c003d09267ae.jpg',
  ],
  1009483 => 
  [
    'name' => 'Onslaught',
    'description' => '',
    'series' => 
    [
      0 => 1995,
      1 => 2011,
      2 => 1814,
      3 => 2021,
      4 => 13577,
      5 => 3304,
      6 => 1090,
      7 => 13602,
      8 => 15490,
      9 => 2057,
      10 => 3900,
      11 => 2258,
      12 => 2098,
      13 => 3633,
      14 => 3643,
      15 => 2265,
      16 => 3637,
      17 => 4919,
      18 => 5395,
      19 => 3284,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/60/535febc427605.jpg',
  ],
  1009484 => 
  [
    'name' => 'Oracle',
    'description' => '',
    'series' => 
    [
      0 => 2445,
      1 => 2027,
      2 => 1440,
      3 => 1807,
      4 => 2281,
      5 => 1166,
      6 => 2258,
      7 => 1723,
      8 => 139,
      9 => 1775,
      10 => 462,
      11 => 153,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4c003d0361454.jpg',
  ],
  1009485 => 
  [
    'name' => 'Orphan',
    'description' => '',
    'series' => 
    [
      0 => 3633,
      1 => 88,
    ],
    'img' => false,
  ],
  1009486 => 
  [
    'name' => 'Harry Osborn',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 2984,
      2 => 5376,
      3 => 6604,
      4 => 2005,
      5 => 1389,
      6 => 6684,
      7 => 10445,
      8 => 10439,
      9 => 13126,
    ],
    'img' => '.',
  ],
  1009487 => 
  [
    'name' => 'Iron Patriot',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009488 => 
  [
    'name' => 'Ozymandias',
    'description' => '',
    'series' => 
    [
      0 => 1995,
      1 => 9976,
      2 => 10585,
      3 => 2258,
      4 => 2262,
      5 => 3633,
      6 => 2265,
      7 => 4020,
      8 => 5761,
      9 => 6691,
      10 => 5395,
      11 => 3284,
    ],
    'img' => false,
  ],
  1009489 => 
  [
    'name' => 'Ben Parker',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 2984,
      2 => 1389,
      3 => 2060,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/c0/4c003d00c8ed9.jpg',
  ],
  1009490 => 
  [
    'name' => 'May Parker',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 5376,
      2 => 2060,
      3 => 722,
      4 => 3133,
      5 => 10439,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/30/535fec80bb4a6.jpg',
  ],
  1009491 => 
  [
    'name' => 'Peter Parker',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009492 => 
  [
    'name' => 'Patriot',
    'description' => '',
    'series' => 
    [
      0 => 13447,
      1 => 1945,
      2 => 1067,
      3 => 1114,
      4 => 1908,
      5 => 2020,
      6 => 1377,
      7 => 2981,
      8 => 2300,
      9 => 1866,
      10 => 756,
      11 => 3424,
      12 => 1250,
      13 => 1661,
      14 => 1955,
    ],
    'img' => '.',
  ],
  1009493 => 
  [
    'name' => 'Penance (Robert Baldwin)',
    'description' => '',
    'series' => 
    [
      0 => 2984,
      1 => 354,
      2 => 9086,
      3 => 10037,
      4 => 1496,
      5 => 1945,
      6 => 13881,
      7 => 2039,
      8 => 1696,
      9 => 2301,
      10 => 1504,
      11 => 839,
      12 => 1410,
      13 => 2912,
      14 => 2293,
      15 => 2083,
      16 => 18527,
      17 => 2945,
      18 => 6689,
      19 => 3633,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/90/52695808ada2e.jpg',
  ],
  1009494 => 
  [
    'name' => 'Pepper Potts',
    'description' => '',
    'series' => 
    [
      0 => 9706,
      1 => 4889,
      2 => 7043,
      3 => 2029,
      4 => 9924,
      5 => 10277,
      6 => 9348,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/f0/4ce188e09af9c.jpg',
  ],
  1009495 => 
  [
    'name' => 'Pestilence',
    'description' => '',
    'series' => 
    [
      0 => 2098,
    ],
    'img' => false,
  ],
  1009496 => 
  [
    'name' => 'Jean Grey',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 14400,
      2 => 9311,
      3 => 13345,
      4 => 13801,
      5 => 9976,
      6 => 2258,
      7 => 8564,
      8 => 9313,
      9 => 2265,
      10 => 9978,
      11 => 10599,
      12 => 9738,
      13 => 9806,
      14 => 1616,
      15 => 827,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/30/4bc654cf9d0ac.jpg',
  ],
  1009497 => 
  [
    'name' => 'Alexander Pierce',
    'description' => '',
    'series' => 
    [
      0 => 6796,
    ],
    'img' => false,
  ],
  1009498 => 
  [
    'name' => 'Plazm',
    'description' => '',
    'series' => 
    [
      0 => 3633,
      1 => 88,
    ],
    'img' => false,
  ],
  1009499 => 
  [
    'name' => 'Polaris',
    'description' => '',
    'series' => 
    [
      0 => 1995,
      1 => 3751,
      2 => 3743,
      3 => 3741,
      4 => 378,
      5 => 1806,
      6 => 3289,
      7 => 1440,
      8 => 3459,
      9 => 3460,
      10 => 1508,
      11 => 1595,
      12 => 8131,
      13 => 8132,
      14 => 8133,
      15 => 8135,
      16 => 8134,
      17 => 8136,
      18 => 8138,
      19 => 2281,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/c0/5274122562b05.jpg',
  ],
  1009500 => 
  [
    'name' => 'John Porter',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009501 => 
  [
    'name' => 'Post',
    'description' => '',
    'series' => 
    [
      0 => 1995,
      1 => 3900,
      2 => 2258,
      3 => 2098,
      4 => 2265,
      5 => 4919,
      6 => 6430,
      7 => 3284,
    ],
    'img' => false,
  ],
  1009502 => 
  [
    'name' => 'Pretty Boy',
    'description' => '',
    'series' => 
    [
      0 => 2258,
      1 => 139,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4c002e0305708.gif',
  ],
  1009503 => 
  [
    'name' => 'Prism',
    'description' => '',
    'series' => 
    [
      0 => 2258,
      1 => 2098,
    ],
    'img' => false,
  ],
  1009504 => 
  [
    'name' => 'Professor X',
    'description' => '',
    'series' => 
    [
      0 => 3614,
      1 => 2116,
      2 => 744,
      3 => 7576,
      4 => 1464,
      5 => 1422,
      6 => 1485,
      7 => 5055,
      8 => 1991,
      9 => 9085,
      10 => 1816,
      11 => 784,
      12 => 1726,
      13 => 1995,
      14 => 3751,
      15 => 3743,
      16 => 3741,
      17 => 378,
      18 => 1806,
      19 => 2011,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/e0/528d3378de525.jpg',
  ],
  1009505 => 
  [
    'name' => 'Proteus',
    'description' => '',
    'series' => 
    [
      0 => 3751,
      1 => 1440,
      2 => 2258,
      3 => 1723,
      4 => 6689,
      5 => 2100,
      6 => 1318,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/10/535fedc85b486.jpg',
  ],
  1009506 => 
  [
    'name' => 'Proudstar',
    'description' => '',
    'series' => 
    [
      0 => 1035,
    ],
    'img' => false,
  ],
  1009507 => 
  [
    'name' => 'Prowler',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 2002,
      2 => 3110,
      3 => 2271,
      4 => 66,
      5 => 1979,
      6 => 403,
      7 => 5242,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/50/4c003c8acc314.jpg',
  ],
  1009508 => 
  [
    'name' => 'Kitty Pryde',
    'description' => '',
    'series' => 
    [
      0 => 744,
      1 => 7576,
      2 => 1464,
      3 => 1298,
      4 => 1422,
      5 => 1485,
      6 => 5055,
      7 => 354,
      8 => 1340,
      9 => 1995,
      10 => 4002,
      11 => 3874,
      12 => 2005,
      13 => 2011,
      14 => 13517,
      15 => 9311,
      16 => 2039,
      17 => 3719,
      18 => 1440,
      19 => 2209,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/03/5261677b30b64.jpg',
  ],
  1009509 => 
  [
    'name' => 'Madelyne Pryor',
    'description' => '',
    'series' => 
    [
      0 => 1595,
      1 => 6689,
      2 => 3642,
      3 => 1452,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/50/528d33ddaef70.jpg',
  ],
  1009510 => 
  [
    'name' => 'PsyNapse',
    'description' => '',
    'series' => 
    [
      0 => 2098,
      1 => 2265,
    ],
    'img' => false,
  ],
  1009511 => 
  [
    'name' => 'Psycho-Man',
    'description' => '',
    'series' => 
    [
      0 => 725,
      1 => 1253,
      2 => 454,
      3 => 2121,
      4 => 1760,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/e0/4c003c82b377c.jpg',
  ],
  1009512 => 
  [
    'name' => 'Psylocke',
    'description' => '',
    'series' => 
    [
      0 => 12429,
      1 => 9994,
      2 => 9995,
      3 => 2116,
      4 => 1816,
      5 => 16230,
      6 => 1995,
      7 => 3741,
      8 => 14388,
      9 => 2011,
      10 => 479,
      11 => 2553,
      12 => 2121,
      13 => 3289,
      14 => 2301,
      15 => 1595,
      16 => 1504,
      17 => 1430,
      18 => 6647,
      19 => 2189,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/50/526961ce86539.jpg',
  ],
  1009513 => 
  [
    'name' => 'Puck',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 13907,
      2 => 1983,
      3 => 2115,
      4 => 378,
      5 => 1806,
      6 => 2039,
      7 => 2059,
      8 => 2431,
      9 => 2702,
      10 => 2258,
      11 => 2262,
      12 => 2098,
      13 => 3637,
    ],
    'img' => '.',
  ],
  1009514 => 
  [
    'name' => 'Puma',
    'description' => '',
    'series' => 
    [
      0 => 2039,
      1 => 1591,
      2 => 2271,
      3 => 722,
      4 => 1803,
      5 => 1857,
      6 => 2092,
      7 => 2262,
      8 => 85,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/7/c0/4c003c7a0ab21.jpg',
  ],
  1009515 => 
  [
    'name' => 'Punisher',
    'description' => '',
    'series' => 
    [
      0 => 15276,
      1 => 12429,
      2 => 459,
      3 => 454,
      4 => 1987,
      5 => 2984,
      6 => 6792,
      7 => 1816,
      8 => 14246,
      9 => 1996,
      10 => 690,
      11 => 175,
      12 => 105,
      13 => 1067,
      14 => 2002,
      15 => 12916,
      16 => 1911,
      17 => 181,
      18 => 1474,
      19 => 867,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/90/5261675f6b22f.jpg',
  ],
  1009517 => 
  [
    'name' => 'Punisher (2099)',
    'description' => '',
    'series' => 
    [
      0 => 1368,
      1 => 821,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/a0/53176fef7fa1c.jpg',
  ],
  1009519 => 
  [
    'name' => 'Puppet Master',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 378,
      2 => 1806,
      3 => 2121,
      4 => 421,
      5 => 3090,
      6 => 188,
      7 => 2952,
      8 => 1404,
      9 => 1671,
      10 => 3715,
      11 => 2288,
      12 => 2076,
      13 => 2080,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/40/4c003c738f74c.jpg',
  ],
  1009520 => 
  [
    'name' => 'Purple Man',
    'description' => '',
    'series' => 
    [
      0 => 2002,
      1 => 13330,
      2 => 788,
      3 => 1514,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/60/4c003c7030b39.jpg',
  ],
  1009522 => 
  [
    'name' => 'Pyro',
    'description' => '',
    'series' => 
    [
      0 => 1988,
      1 => 1995,
      2 => 2002,
      3 => 866,
      4 => 2301,
      5 => 2258,
      6 => 2262,
      7 => 2098,
      8 => 6689,
      9 => 2941,
      10 => 3633,
      11 => 2265,
      12 => 2100,
      13 => 1327,
      14 => 1318,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/c0/4ce5a0eeab435.jpg',
  ],
  1009523 => 
  [
    'name' => 'Quasar (Phyla-Vell)',
    'description' => '',
    'series' => 
    [
      0 => 3061,
      1 => 2524,
      2 => 10030,
      3 => 10031,
      4 => 1816,
      5 => 2111,
      6 => 93,
      7 => 1679,
      8 => 359,
      9 => 1996,
      10 => 421,
      11 => 2121,
      12 => 3289,
      13 => 2039,
      14 => 1440,
      15 => 3715,
      16 => 2049,
      17 => 2059,
      18 => 2702,
      19 => 2271,
    ],
    'img' => '.',
  ],
  1009524 => 
  [
    'name' => 'Quicksilver',
    'description' => '',
    'series' => 
    [
      0 => 3614,
      1 => 1991,
      2 => 354,
      3 => 9085,
      4 => 9086,
      5 => 10037,
      6 => 1988,
      7 => 1340,
      8 => 1737,
      9 => 1816,
      10 => 2929,
      11 => 2384,
      12 => 9862,
      13 => 158,
      14 => 6476,
      15 => 6473,
      16 => 10056,
      17 => 9864,
      18 => 98,
      19 => 1992,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/f0/53176ffc42f58.jpg',
  ],
  1009525 => 
  [
    'name' => 'Valeria Richards',
    'description' => '',
    'series' => 
    [
      0 => 454,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/60/4d541255f088a.jpg',
  ],
  1009526 => 
  [
    'name' => 'Radioactive Man',
    'description' => '',
    'series' => 
    [
      0 => 3621,
      1 => 1991,
      2 => 1988,
      3 => 1813,
      4 => 2572,
      5 => 788,
      6 => 1331,
      7 => 1514,
      8 => 1547,
      9 => 2071,
      10 => 69,
      11 => 18527,
      12 => 2427,
      13 => 2715,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/00/4c003c66d3393.jpg',
  ],
  1009527 => 
  [
    'name' => 'Raider',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009528 => 
  [
    'name' => 'Randall',
    'description' => '',
    'series' => 
    [
      0 => 2258,
      1 => 3633,
      2 => 2265,
    ],
    'img' => false,
  ],
  1009529 => 
  [
    'name' => 'Ilyana Rasputin',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009530 => 
  [
    'name' => 'Mikhail Rasputin',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009531 => 
  [
    'name' => 'Raza',
    'description' => '',
    'series' => 
    [
      0 => 359,
      1 => 2011,
      2 => 1440,
      3 => 1763,
      4 => 2258,
      5 => 1723,
      6 => 2555,
      7 => 2262,
      8 => 2715,
      9 => 3645,
      10 => 139,
      11 => 1319,
      12 => 1304,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/70/4ce5a1057fce9.jpg',
  ],
  1009532 => 
  [
    'name' => 'Reaper',
    'description' => '',
    'series' => 
    [
      0 => 2098,
      1 => 1915,
      2 => 5068,
      3 => 3633,
      4 => 2265,
    ],
    'img' => false,
  ],
  1009533 => 
  [
    'name' => 'Reavers',
    'description' => '',
    'series' => 
    [
      0 => 13745,
      1 => 2258,
      2 => 2262,
      3 => 139,
    ],
    'img' => '.',
  ],
  1009534 => 
  [
    'name' => 'Red Ghost',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 3743,
      2 => 2121,
      3 => 8135,
      4 => 2262,
      5 => 84,
    ],
    'img' => '.',
  ],
  1009535 => 
  [
    'name' => 'Red Skull',
    'description' => '',
    'series' => 
    [
      0 => 7534,
      1 => 2114,
      2 => 354,
      3 => 1991,
      4 => 158,
      5 => 227,
      6 => 271,
      7 => 4864,
      8 => 9120,
      9 => 2722,
      10 => 1996,
      11 => 832,
      12 => 1997,
      13 => 485,
      14 => 1766,
      15 => 1459,
      16 => 197,
      17 => 12849,
      18 => 3752,
      19 => 8213,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/03/526036550cd37.jpg',
  ],
  1009536 => 
  [
    'name' => 'Cecilia Reyes',
    'description' => '',
    'series' => 
    [
      0 => 2258,
      1 => 3633,
      2 => 1318,
    ],
    'img' => false,
  ],
  1009537 => 
  [
    'name' => 'Rhino',
    'description' => '',
    'series' => 
    [
      0 => 459,
      1 => 454,
      2 => 1987,
      3 => 5376,
      4 => 693,
      5 => 2710,
      6 => 2121,
      7 => 2021,
      8 => 292,
      9 => 3715,
      10 => 2271,
      11 => 325,
      12 => 2071,
      13 => 67,
      14 => 69,
      15 => 2072,
      16 => 10445,
      17 => 162,
      18 => 2093,
      19 => 646,
    ],
    'img' => '.',
  ],
  1009538 => 
  [
    'name' => 'Iron Patriot (James Rhodes)',
    'description' => 'U.S. Air Force pilot and Tony Stark\'s friend who has his own suit of Iron Man armor, nicknamed, "War Machine."',
    'series' => 
    [
      0 => 14779,
      1 => 3623,
      2 => 3624,
      3 => 1945,
      4 => 553,
      5 => 14804,
      6 => 3374,
      7 => 8842,
      8 => 4889,
      9 => 7043,
      10 => 9159,
      11 => 2029,
      12 => 2572,
      13 => 9924,
      14 => 13385,
      15 => 15101,
      16 => 3723,
      17 => 9347,
      18 => 10277,
      19 => 9348,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/70/526035f38cd5d.jpg',
  ],
  1009539 => 
  [
    'name' => 'Franklin Richards',
    'description' => 'The son of Reed Richards and Susan Storm of the Fantastic Four, Franklin may one day be the most powerful person on Earth. Right now, he\'s the son of a genius who finds adventure and fun around every corner.',
    'series' => 
    [
      0 => 454,
      1 => 2005,
      2 => 109,
      3 => 2008,
      4 => 971,
      5 => 14307,
      6 => 1041,
      7 => 3072,
      8 => 1118,
      9 => 1909,
      10 => 1880,
      11 => 2887,
      12 => 361,
      13 => 1117,
      14 => 2419,
      15 => 1090,
      16 => 3304,
      17 => 3900,
      18 => 13490,
      19 => 3648,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/00/535fedbaaf234.jpg',
  ],
  1009541 => 
  [
    'name' => 'Molly Von Richtofen',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009542 => 
  [
    'name' => 'Rictor',
    'description' => '',
    'series' => 
    [
      0 => 1995,
      1 => 14400,
      2 => 1430,
      3 => 2281,
      4 => 1807,
      5 => 56,
      6 => 2258,
      7 => 3648,
      8 => 1035,
      9 => 2098,
      10 => 6689,
      11 => 5068,
      12 => 14428,
      13 => 1882,
      14 => 3633,
      15 => 2265,
      16 => 139,
      17 => 2102,
      18 => 1685,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/03/527414130f76d.jpg',
  ],
  1009543 => 
  [
    'name' => 'Riptide',
    'description' => '',
    'series' => 
    [
      0 => 2258,
      1 => 2265,
      2 => 15598,
      3 => 92,
      4 => 343,
    ],
    'img' => false,
  ],
  1009544 => 
  [
    'name' => 'Risque',
    'description' => '',
    'series' => 
    [
      0 => 2070,
      1 => 3633,
      2 => 4919,
      3 => 3284,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/f0/4c7c645aa1623.jpg',
  ],
  1009545 => 
  [
    'name' => 'Robbie Robertson',
    'description' => '',
    'series' => 
    [
      0 => 672,
      1 => 13383,
      2 => 454,
      3 => 2984,
      4 => 1389,
      5 => 753,
      6 => 1446,
      7 => 3692,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/a0/4c003c50a94b7.jpg',
  ],
  1009546 => 
  [
    'name' => 'Rogue',
    'description' => '',
    'series' => 
    [
      0 => 13896,
      1 => 2116,
      2 => 744,
      3 => 354,
      4 => 1988,
      5 => 1340,
      6 => 1816,
      7 => 3753,
      8 => 1995,
      9 => 3874,
      10 => 3751,
      11 => 3745,
      12 => 777,
      13 => 1476,
      14 => 9895,
      15 => 10218,
      16 => 3289,
      17 => 2035,
      18 => 3719,
      19 => 2301,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/10/5112d84e2166c.jpg',
  ],
  1009547 => 
  [
    'name' => 'Natasha Romanoff',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009548 => 
  [
    'name' => 'Betty Ross',
    'description' => '',
    'series' => 
    [
      0 => 10261,
      1 => 8842,
      2 => 1404,
      3 => 2300,
      4 => 2080,
    ],
    'img' => '.',
  ],
  1009549 => 
  [
    'name' => 'Roulette',
    'description' => '',
    'series' => 
    [
      0 => 2258,
    ],
    'img' => false,
  ],
  1009550 => 
  [
    'name' => 'Bart Rozum',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009551 => 
  [
    'name' => 'Russian',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/10/4c003c4af200f.jpg',
  ],
  1009552 => 
  [
    'name' => 'S.H.I.E.L.D.',
    'description' => '',
    'series' => 
    [
      0 => 7524,
      1 => 6079,
      2 => 1991,
      3 => 10035,
      4 => 9859,
      5 => 4864,
      6 => 2722,
      7 => 832,
      8 => 1613,
      9 => 10105,
      10 => 2002,
      11 => 13631,
      12 => 2123,
      13 => 1812,
      14 => 13508,
      15 => 3762,
      16 => 4889,
      17 => 7043,
      18 => 1468,
      19 => 1494,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/20/51097abb8e306.jpg',
  ],
  1009553 => 
  [
    'name' => 'Sabra',
    'description' => 'Ruth Bat-Seraph is an Israeli national who, along with her family, was taken to a special community by the Israeli government when her genetic mutation manifested.',
    'series' => 
    [
      0 => 2011,
      1 => 2301,
      2 => 2281,
      3 => 1807,
      4 => 56,
      5 => 2258,
      6 => 2265,
      7 => 1319,
      8 => 1304,
    ],
    'img' => false,
  ],
  1009554 => 
  [
    'name' => 'Sabretooth',
    'description' => '',
    'series' => 
    [
      0 => 14985,
      1 => 3874,
      2 => 1691,
      3 => 14388,
      4 => 479,
      5 => 2553,
      6 => 6831,
      7 => 1430,
      8 => 9922,
      9 => 2059,
      10 => 2431,
      11 => 2271,
      12 => 770,
      13 => 1281,
      14 => 2083,
      15 => 2716,
      16 => 9976,
      17 => 2258,
      18 => 163,
      19 => 138,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/00/4ce1895117793.jpg',
  ],
  1009555 => 
  [
    'name' => 'Sage',
    'description' => '',
    'series' => 
    [
      0 => 935,
      1 => 1897,
      2 => 8086,
      3 => 2890,
      4 => 144,
      5 => 2107,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/90/4c003c44095cb.png',
  ],
  1009556 => 
  [
    'name' => 'Gene Sailors',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009557 => 
  [
    'name' => 'Howard Saint',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009558 => 
  [
    'name' => 'Sandman',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 454,
      2 => 354,
      3 => 1340,
      4 => 449,
      5 => 18,
      6 => 378,
      7 => 1806,
      8 => 2121,
      9 => 1505,
      10 => 3732,
      11 => 2021,
      12 => 4889,
      13 => 2300,
      14 => 2301,
      15 => 3715,
      16 => 6679,
      17 => 2271,
      18 => 2060,
      19 => 886,
    ],
    'img' => '.',
  ],
  1009559 => 
  [
    'name' => 'Saracen (Muzzafar Lambert)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009560 => 
  [
    'name' => 'Sasquatch (Walter Langkowski)',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 719,
      2 => 13907,
      3 => 1983,
      4 => 1335,
      5 => 2115,
      6 => 2005,
      7 => 4605,
      8 => 7713,
      9 => 3741,
      10 => 378,
      11 => 1806,
      12 => 479,
      13 => 154,
      14 => 116,
      15 => 2121,
      16 => 823,
      17 => 1375,
      18 => 2021,
      19 => 3289,
    ],
    'img' => false,
  ],
  1009561 => 
  [
    'name' => 'Sauron',
    'description' => '',
    'series' => 
    [
      0 => 3751,
      1 => 3719,
      2 => 1440,
      3 => 1689,
      4 => 753,
      5 => 1260,
      6 => 2258,
      7 => 1723,
      8 => 163,
      9 => 138,
      10 => 3652,
      11 => 3649,
      12 => 2262,
      13 => 2098,
      14 => 2941,
      15 => 3633,
      16 => 14479,
      17 => 14480,
      18 => 2265,
      19 => 3637,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/00/4c003c3d85554.jpg',
  ],
  1009562 => 
  [
    'name' => 'Scarlet Witch',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 744,
      2 => 1991,
      3 => 3621,
      4 => 354,
      5 => 9086,
      6 => 1340,
      7 => 1496,
      8 => 1737,
      9 => 1816,
      10 => 2929,
      11 => 2384,
      12 => 2111,
      13 => 93,
      14 => 9862,
      15 => 158,
      16 => 227,
      17 => 271,
      18 => 15305,
      19 => 3624,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/70/5261a7d7c394b.jpg',
  ],
  1009565 => 
  [
    'name' => 'Scourge',
    'description' => '',
    'series' => 
    [
      0 => 2722,
      1 => 1996,
      2 => 2083,
      3 => 223,
      4 => 2262,
    ],
    'img' => '.',
  ],
  1009566 => 
  [
    'name' => 'Scream (Donna Diego)',
    'description' => 'Out of the five alien symbiotes that were forcefully extracted from Venom (while bonded with Eddie Brock) by the Life Foundation, Donna\'s is the only one still active today that is not bonded to Hybrid.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009567 => 
  [
    'name' => 'Amanda Sefton',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009568 => 
  [
    'name' => 'Selene',
    'description' => 'The long-standing Black Queen of the Hellfire Club\'s Inner Circle, Selene Gallio professes to have lived for several millennia, and to have been a foe of the ancient sorcerer, Kulan Gath.',
    'series' => 
    [
      0 => 2039,
      1 => 1637,
      2 => 2258,
      3 => 1910,
      4 => 2715,
      5 => 3633,
      6 => 2265,
      7 => 1774,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/d0/4c003c337aff5.jpg',
  ],
  1009569 => 
  [
    'name' => 'Senator Kelly',
    'description' => '',
    'series' => 
    [
      0 => 2258,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/f0/4ce5a14f2ea36.jpg',
  ],
  1009570 => 
  [
    'name' => 'Sentinel',
    'description' => '',
    'series' => 
    [
      0 => 1721,
      1 => 3751,
      2 => 1649,
      3 => 1643,
      4 => 855,
      5 => 2029,
      6 => 2301,
      7 => 1504,
      8 => 749,
      9 => 3900,
      10 => 2271,
      11 => 956,
      12 => 480,
      13 => 328,
      14 => 1205,
      15 => 1610,
      16 => 2258,
      17 => 1413,
      18 => 632,
      19 => 2262,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/60/4ce5a159e5082.jpg',
  ],
  1009571 => 
  [
    'name' => 'Sentry (Robert Reynolds)',
    'description' => 'Empowered by the enigmatic Professor\'s secret formula, high school student Robert Reynolds became a superhuman.',
    'series' => 
    [
      0 => 7524,
      1 => 6079,
      2 => 454,
      3 => 4864,
      4 => 1945,
      5 => 13259,
      6 => 1109,
      7 => 10105,
      8 => 3762,
      9 => 8842,
      10 => 835,
      11 => 1881,
      12 => 1866,
      13 => 5381,
      14 => 753,
      15 => 1260,
      16 => 1417,
      17 => 1446,
      18 => 367,
      19 => 15297,
    ],
    'img' => '.',
  ],
  1009572 => 
  [
    'name' => 'Serpent Society',
    'description' => '',
    'series' => 
    [
      0 => 1996,
      1 => 12817,
      2 => 14151,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/7/d0/4c003c2e0c1d0.jpg',
  ],
  1009573 => 
  [
    'name' => 'Shadow King',
    'description' => 'One of the oldest and more powerful mutants ever, Amahl Farouk has been a threat to mankind at least for decades. He was the first evil mutant met by Charles Xavier, convincing him of the need of the X-Men.',
    'series' => 
    [
      0 => 1440,
      1 => 9976,
      2 => 2258,
      3 => 1723,
      4 => 2098,
      5 => 2265,
      6 => 2100,
      7 => 139,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/30/4ce5a16fd4182.jpg',
  ],
  1009574 => 
  [
    'name' => 'Shadowcat',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/7/e0/4c003c2b50b1d.jpg',
  ],
  1009575 => 
  [
    'name' => 'Shalla-bal',
    'description' => '',
    'series' => 
    [
      0 => 3741,
    ],
    'img' => false,
  ],
  1009576 => 
  [
    'name' => 'Shaman',
    'description' => 'Dr. Michael Twoyoungmen was a surgeon who found that modern science was insufficient to accomplish everything he wished to do, and so he turned to mysticism that his grandfather told him about.',
    'series' => 
    [
      0 => 2116,
      1 => 13907,
      2 => 1983,
      3 => 2115,
      4 => 3741,
      5 => 3289,
      6 => 1440,
      7 => 2258,
      8 => 1723,
      9 => 3654,
      10 => 2262,
    ],
    'img' => '.',
  ],
  1009577 => 
  [
    'name' => 'Shang-Chi',
    'description' => 'Shang-Chi is the son of an internationally-renowned and powerful criminal mastermind whose childhood was a lonely one, full of constant training in rigorous mental and martial arts, with only limited contact with his parents.',
    'series' => 
    [
      0 => 454,
      1 => 18888,
      2 => 13691,
      3 => 14804,
      4 => 1121,
      5 => 2700,
      6 => 13569,
      7 => 9799,
      8 => 12171,
      9 => 13252,
      10 => 13879,
      11 => 2265,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/20/535ff3b116209.jpg',
  ],
  1009578 => 
  [
    'name' => 'Shanna the She-Devil',
    'description' => 'The only daughter of a wealthy diamond miner, Shanna grew up in the Zaire jungles, where, at age six, she witnessed her father’s accidental fatal shooting of her mother, starting a lifelong loathing of firearms.',
    'series' => 
    [
      0 => 378,
      1 => 1806,
      2 => 13316,
      3 => 2039,
      4 => 1697,
      5 => 3719,
      6 => 3693,
      7 => 7057,
      8 => 1910,
      9 => 13599,
    ],
    'img' => '.',
  ],
  1009579 => 
  [
    'name' => 'Shard',
    'description' => 'Shard and her older brother Bishop were raised in the 21st Century, some eighty years into an alternate future, by their grandmother, in a timeline in which the X-Men were betrayed by one of their own and killed, causing a disaster that caused the government to place a stylized \'M\' tattoo over the left eyes of all mutants.',
    'series' => 
    [
      0 => 3626,
      1 => 3753,
      2 => 3648,
      3 => 2098,
      4 => 4919,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/50/4c003c24b9222.jpg',
  ],
  1009580 => 
  [
    'name' => 'Shatterstar',
    'description' => 'Shatterstar is Gaveedra Seven, the product of bio-engineering on an otherdimensional world, who was at one point merged with an Earth mutant named Benjamin Russell, the nature of whose genetic mutation remains unknown.',
    'series' => 
    [
      0 => 1995,
      1 => 4059,
      2 => 1110,
      3 => 1965,
      4 => 3874,
      5 => 1430,
      6 => 2258,
      7 => 2262,
      8 => 1035,
      9 => 2098,
      10 => 6689,
      11 => 5068,
      12 => 3633,
      13 => 13428,
      14 => 825,
      15 => 1386,
      16 => 2265,
      17 => 2100,
      18 => 3637,
      19 => 4773,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/70/4c003c21cd9e1.jpg',
  ],
  1009581 => 
  [
    'name' => 'Sebastian Shaw',
    'description' => 'Sebastian Shaw was invited to join the elite Hellfire Club and quickly worked his way into a position within the Inner Circle.',
    'series' => 
    [
      0 => 9086,
      1 => 9895,
      2 => 9976,
      3 => 2258,
      4 => 1119,
      5 => 13124,
      6 => 6688,
      7 => 3633,
      8 => 15598,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/c0/4c003c1e9a90e.jpg',
  ],
  1009582 => 
  [
    'name' => 'Shinobi Shaw',
    'description' => 'Shinobi Shaw is the illegitimate son of Sebastian Shaw, who was rejected and abandoned by his father at an early age and grew tired of waiting to inherit his father\'s wealth and wearied of the elder Shaw\'s contempt for his decadent lifestyle.',
    'series' => 
    [
      0 => 3633,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/a0/4c003c1bbf29f.jpg',
  ],
  1009583 => 
  [
    'name' => 'She-Hulk (Jennifer Walters)',
    'description' => 'Seriously wounded, young lawyer Jennifer Walters was given a blood transfusion by her cousin Bruce Banner. Usually in better control of her powers and temper than the Hulk, She-Hulk has been a high profile New York lawyer as well as an upstanding member of both the Avengers and Fantastic Four.',
    'series' => 
    [
      0 => 7524,
      1 => 6079,
      2 => 7231,
      3 => 2116,
      4 => 10030,
      5 => 10031,
      6 => 1991,
      7 => 354,
      8 => 1340,
      9 => 1737,
      10 => 1816,
      11 => 2384,
      12 => 158,
      13 => 227,
      14 => 271,
      15 => 6476,
      16 => 6473,
      17 => 1945,
      18 => 98,
      19 => 1503,
    ],
    'img' => '.',
  ],
  1009584 => 
  [
    'name' => 'Shiva',
    'description' => '',
    'series' => 
    [
      0 => 2262,
      1 => 317,
    ],
    'img' => false,
  ],
  1009585 => 
  [
    'name' => 'Shocker (Herman Schultz)',
    'description' => 'Herman Schultz is a career criminal who, after several prison terms for robbery, built a battle suit that sent out shock waves to quickly open safes as well as give him a significant advantage over the New York police.',
    'series' => 
    [
      0 => 454,
      1 => 1987,
      2 => 1945,
      3 => 3097,
      4 => 2572,
      5 => 1807,
      6 => 2281,
      7 => 56,
      8 => 2060,
      9 => 10445,
      10 => 17554,
      11 => 18527,
    ],
    'img' => false,
  ],
  1009586 => 
  [
    'name' => 'Shotgun',
    'description' => '',
    'series' => 
    [
      0 => 2002,
      1 => 64,
      2 => 2065,
      3 => 2258,
    ],
    'img' => false,
  ],
  1009587 => 
  [
    'name' => 'Shriek',
    'description' => 'Shriek became a groupie for a rock band and a drug dealer on the side until the vigilantes Cloak and Dagger happened by during one of her deals.',
    'series' => 
    [
      0 => 2271,
      1 => 1169,
    ],
    'img' => '.',
  ],
  1009588 => 
  [
    'name' => 'Sif',
    'description' => 'Sif was born a second generation goddess of Asgard and eventually became Thor\'s lover.',
    'series' => 
    [
      0 => 454,
      1 => 354,
      2 => 13689,
      3 => 2006,
      4 => 2564,
      5 => 3741,
      6 => 378,
      7 => 1806,
      8 => 14475,
      9 => 15595,
      10 => 2572,
      11 => 14764,
      12 => 13569,
      13 => 14509,
      14 => 14516,
      15 => 1705,
      16 => 4925,
      17 => 4926,
      18 => 9312,
      19 => 13757,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/50/527bb6fc4ec43.jpg',
  ],
  1009589 => 
  [
    'name' => 'Silver Fox',
    'description' => 'Silver Fox was a young member of the Blackfoot Indian tribe who, in the early 1910s, fell in love with a young mutant named Logan and shared a cabin with him in a remote community in the Canadian Rockies.',
    'series' => 
    [
      0 => 2262,
      1 => 317,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/d0/4c003c19078c3.jpg',
  ],
  1009590 => 
  [
    'name' => 'Silver Sable',
    'description' => 'Silver Sable trained her entire life, becoming a master of a wide variety of weapons and training in all forms of hand-to-hand combat in preparation for the day she would inherit leadership of the Wild Pack.',
    'series' => 
    [
      0 => 1987,
      1 => 2002,
      2 => 2121,
      3 => 13330,
      4 => 2572,
      5 => 14441,
      6 => 1590,
      7 => 15282,
      8 => 2093,
      9 => 2094,
    ],
    'img' => '.',
  ],
  1009591 => 
  [
    'name' => 'Silver Samurai',
    'description' => 'Keniuchio Harada is the mutant son of the former Japanese crimelord Shingen Harada.',
    'series' => 
    [
      0 => 4059,
      1 => 6668,
      2 => 2002,
      3 => 574,
      4 => 27,
      5 => 753,
      6 => 1446,
      7 => 367,
      8 => 2258,
      9 => 2262,
      10 => 1516,
      11 => 2265,
      12 => 3637,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/50/4c003c13058bd.jpg',
  ],
  1009592 => 
  [
    'name' => 'Silver Surfer',
    'description' => 'When Zenn-La was threatened by the world-devouring entity known as Galactus, Norrin Radd stood up for his home planet and offered to work for Galactus, finding him new planets to eat, in exchange for saving his own. Years later, the Surfer has protected Earth and many other planets, becoming one of the greatest heroes in the universe.',
    'series' => 
    [
      0 => 3613,
      1 => 2974,
      2 => 1078,
      3 => 13025,
      4 => 1991,
      5 => 3621,
      6 => 1816,
      7 => 11854,
      8 => 13468,
      9 => 12916,
      10 => 2002,
      11 => 11518,
      12 => 12988,
      13 => 3743,
      14 => 728,
      15 => 14701,
      16 => 13851,
      17 => 3290,
      18 => 3741,
      19 => 378,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/50/527bb6490a176.jpg',
  ],
  1009594 => 
  [
    'name' => 'Silvermane',
    'description' => 'Silvio Manfredi has been a career criminal for most of his life.',
    'series' => 
    [
      0 => 1987,
      1 => 354,
      2 => 2002,
      3 => 1703,
      4 => 2271,
      5 => 5860,
      6 => 2262,
      7 => 84,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/80/4c003c0fc6a28.jpg',
  ],
  1009595 => 
  [
    'name' => 'Roxanne Simpson',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009596 => 
  [
    'name' => 'Banshee (Theresa Rourke)',
    'description' => 'The daughter of former X-Men member Sean Cassidy, a.k.a. Banshee, and Maeve Rourke, Theresa Rourke was raised by her first cousin once removed, mutant terrorist Thomas Cassidy, a.k.a. Black Tom.',
    'series' => 
    [
      0 => 1995,
      1 => 3874,
      2 => 2005,
      3 => 7713,
      4 => 2039,
      5 => 1591,
      6 => 3460,
      7 => 3459,
      8 => 2281,
      9 => 1807,
      10 => 56,
      11 => 2059,
      12 => 2702,
      13 => 2258,
      14 => 3648,
      15 => 2098,
      16 => 1035,
      17 => 6689,
      18 => 5068,
      19 => 1882,
    ],
    'img' => '.',
  ],
  1009597 => 
  [
    'name' => 'Jasper Sitwell',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1737,
      2 => 1814,
      3 => 2029,
      4 => 13577,
      5 => 2725,
    ],
    'img' => false,
  ],
  1009598 => 
  [
    'name' => 'Skin',
    'description' => 'Angelo Espinosa, a founding member of Generation X, code-named "Skin" due to his mutant ability to extend and control his extra skin in any number of ways.',
    'series' => 
    [
      0 => 2258,
      1 => 2262,
      2 => 2265,
      3 => 3640,
      4 => 3637,
      5 => 1318,
      6 => 1452,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/20/4c003c0ce4a43.jpg',
  ],
  1009599 => 
  [
    'name' => 'Skrulls',
    'description' => '',
    'series' => 
    [
      0 => 1945,
      1 => 784,
      2 => 1997,
      3 => 479,
      4 => 116,
      5 => 2121,
      6 => 2012,
      7 => 3090,
      8 => 2446,
      9 => 1440,
      10 => 1866,
      11 => 6796,
      12 => 2258,
      13 => 3648,
      14 => 2262,
      15 => 2265,
      16 => 4020,
      17 => 1775,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/70/52028ba02bc7d.jpg',
  ],
  1009600 => 
  [
    'name' => 'Skullbuster (Cylla Markham)',
    'description' => '',
    'series' => 
    [
      0 => 2258,
      1 => 139,
      2 => 646,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/b0/4c003c072eb58.jpg',
  ],
  1009601 => 
  [
    'name' => 'Sleeper',
    'description' => '',
    'series' => 
    [
      0 => 832,
      1 => 1779,
    ],
    'img' => false,
  ],
  1009602 => 
  [
    'name' => 'Slipstream',
    'description' => 'Australian mutant siblings Heather and Davis Cameron were sent to live in Surfer\'s Paradise by their father in an effort to spare them from his life as Viceroy, godfather of Australian organized crime.',
    'series' => 
    [
      0 => 646,
      1 => 143,
    ],
    'img' => false,
  ],
  1009603 => 
  [
    'name' => 'Smasher (Vril Rokk)',
    'description' => 'Smasher is a member of the Imperial Guard, a multi-ethnic group of super-powered alien beings who act as enforcers of the laws of the Shi\'ar Empire.',
    'series' => 
    [
      0 => 1987,
      1 => 2445,
      2 => 2027,
      3 => 1440,
      4 => 2281,
      5 => 1807,
      6 => 1166,
      7 => 2258,
      8 => 1723,
      9 => 139,
      10 => 1775,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/d0/4c003ae66139c.jpg',
  ],
  1009604 => 
  [
    'name' => 'Jennifer Smith',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009605 => 
  [
    'name' => 'Spencer Smythe',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 2020,
    ],
    'img' => false,
  ],
  1009606 => 
  [
    'name' => 'Snowbird',
    'description' => 'Narya\'s origins trace back to ancient times when the Eskimo Gods of the North battled the mystical Great Beasts for the fate of the world.',
    'series' => 
    [
      0 => 2116,
      1 => 13907,
      2 => 1983,
      3 => 2115,
      4 => 13260,
      5 => 1440,
      6 => 2258,
      7 => 1723,
      8 => 2262,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/a0/4c003ae37eccd.jpg',
  ],
  1009607 => 
  [
    'name' => 'Spacker Dave',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009608 => 
  [
    'name' => 'Spider-Woman (Jessica Drew)',
    'description' => 'When young Jessica Drew suffered uranium poisoning in 1931, her father was forced to inject her with his untested spider serum and seal her in a genetic accelerator.',
    'series' => 
    [
      0 => 454,
      1 => 1991,
      2 => 9085,
      3 => 10051,
      4 => 10048,
      5 => 13032,
      6 => 15305,
      7 => 4864,
      8 => 1945,
      9 => 14246,
      10 => 1067,
      11 => 378,
      12 => 1806,
      13 => 13691,
      14 => 3204,
      15 => 9896,
      16 => 13508,
      17 => 3715,
      18 => 1866,
      19 => 5381,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/50/5265479097743.jpg',
  ],
  1009609 => 
  [
    'name' => 'Spider-Girl (May Parker)',
    'description' => 'May "Mayday" Parker is the daughter of Spider-Man and Mary Jane Watson-Parker. Born with all her father�s powers-and the same silly sense of humor-she�s grown up to become one of Earth�s most trusted heroes and a fitting tribute to her proud papa.',
    'series' => 
    [
      0 => 1126,
      1 => 2234,
      2 => 3101,
      3 => 5376,
      4 => 1143,
      5 => 2241,
      6 => 1995,
      7 => 5260,
      8 => 19,
      9 => 13881,
      10 => 2572,
      11 => 2031,
      12 => 923,
      13 => 1540,
      14 => 2059,
      15 => 2431,
      16 => 2702,
      17 => 9856,
      18 => 417,
      19 => 1681,
    ],
    'img' => '.',
  ],
  1009610 => 
  [
    'name' => 'Spider-Man',
    'description' => 'Bitten by a radioactive spider, high school student Peter Parker gained the speed, strength and powers of a spider. Adopting the name Spider-Man, Peter hoped to start a career using his new abilities. Taught that with great power comes great responsibility, Spidey has vowed to use his powers to help people.',
    'series' => 
    [
      0 => 16450,
      1 => 458,
      2 => 10235,
      3 => 672,
      4 => 13383,
      5 => 2116,
      6 => 1983,
      7 => 2987,
      8 => 2707,
      9 => 1126,
      10 => 2234,
      11 => 3101,
      12 => 1987,
      13 => 454,
      14 => 17285,
      15 => 2984,
      16 => 9802,
      17 => 13205,
      18 => 5958,
      19 => 5376,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/50/526548a343e4b.jpg',
  ],
  1009614 => 
  [
    'name' => 'Spiral (Rita Wayword)',
    'description' => 'Spiral was created to be an agent of Mojo, the despotic leader of Mojo World, often used as his favored personal servant, executioner, and spy.',
    'series' => 
    [
      0 => 2011,
      1 => 5861,
      2 => 13519,
      3 => 2258,
      4 => 2262,
      5 => 2098,
      6 => 6689,
      7 => 3633,
      8 => 2265,
      9 => 2100,
      10 => 211,
      11 => 242,
      12 => 3637,
      13 => 139,
      14 => 14362,
      15 => 14364,
      16 => 6045,
      17 => 1774,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/a0/4c003ad84f314.jpg',
  ],
  1009615 => 
  [
    'name' => 'Stephanie de la Spiroza',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009616 => 
  [
    'name' => 'Spot',
    'description' => 'Jonathan Ohnn was working as a research scientist on behalf of Wilson Fisk, the Kingpin of Crime.',
    'series' => 
    [
      0 => 454,
      1 => 421,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/b0/4c003ad4d2e8d.jpg',
  ],
  1009617 => 
  [
    'name' => 'Spyke',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009618 => 
  [
    'name' => 'Stacy X',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1990,
      2 => 158,
      3 => 7,
      4 => 8,
      5 => 485,
      6 => 251,
      7 => 690,
      8 => 175,
      9 => 105,
      10 => 3722,
      11 => 2437,
      12 => 3720,
      13 => 2281,
      14 => 1807,
      15 => 3670,
      16 => 3671,
      17 => 2258,
      18 => 184,
      19 => 1609,
    ],
    'img' => false,
  ],
  1009619 => 
  [
    'name' => 'Gwen Stacy',
    'description' => 'Peter Parker\'s first true love, Gwen Stacy was killed during a rescue attempt by Spider-Man, the guilt from which Peter has never overcome.',
    'series' => 
    [
      0 => 454,
      1 => 2984,
      2 => 2005,
      3 => 1389,
      4 => 6684,
      5 => 13511,
      6 => 13532,
      7 => 10534,
      8 => 1017,
      9 => 1670,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/40/4c003ad20ab78.jpg',
  ],
  1009620 => 
  [
    'name' => 'Obadiah Stane',
    'description' => '',
    'series' => 
    [
      0 => 4889,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/e0/4ce5a1b721545.jpg',
  ],
  1009621 => 
  [
    'name' => 'Starbolt',
    'description' => 'Starbolt is a member of the Shi\'ar Imperial Guard.',
    'series' => 
    [
      0 => 2445,
      1 => 2027,
      2 => 1440,
      3 => 2258,
      4 => 1723,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/70/4c003acf4e4bc.jpg',
  ],
  1009622 => 
  [
    'name' => 'Stark Industries',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009623 => 
  [
    'name' => 'Morgan Stark',
    'description' => '',
    'series' => 
    [
      0 => 2572,
      1 => 2725,
    ],
    'img' => false,
  ],
  1009624 => 
  [
    'name' => 'Tony Stark',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009625 => 
  [
    'name' => 'Stepford Cuckoos',
    'description' => 'The Stepford Cuckoos were five identical mutant sisters who enrolled at the Xavier Institute and soon proved to be the crème de la crème of Emma Frost\'s telepathy class.',
    'series' => 
    [
      0 => 13588,
      1 => 2281,
      2 => 1807,
      3 => 1166,
      4 => 5338,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/90/4c003acc72680.jpg',
  ],
  1009626 => 
  [
    'name' => 'Stick',
    'description' => 'Stick, who trained both Daredevil and Elektra in the martial arts, is the leader of the warrior order called The Chaste, and has fought alongside the clan\'s other members against The Hand for years.',
    'series' => 
    [
      0 => 2002,
      1 => 449,
      2 => 1911,
      3 => 18,
      4 => 2262,
    ],
    'img' => false,
  ],
  1009627 => 
  [
    'name' => 'Stilt-Man (Wibur Day)',
    'description' => 'Wilbur Day was a scientist at Kaxton Labs who stole designs for a hydraulic ramming device from his company out of frustration of his position in his job.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/f0/4c003ac98d3ce.jpg',
  ],
  1009628 => 
  [
    'name' => 'Stingray (Walter Newell)',
    'description' => 'Creating the Stingray costume, Newell succeeded in capturing the Sub-Mariner, although Namor soon escaped and Newell, while initially defeating him a second time, allowed his friend to go.',
    'series' => 
    [
      0 => 2116,
      1 => 354,
      2 => 1340,
      3 => 1945,
      4 => 98,
      5 => 3743,
      6 => 2121,
      7 => 2029,
      8 => 1846,
      9 => 2039,
      10 => 1696,
      11 => 886,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/d0/4c003ac5e5195.jpg',
  ],
  1009629 => 
  [
    'name' => 'Storm',
    'description' => 'Ororo Monroe is the descendant of an ancient line of African priestesses, all of whom have white hair, blue eyes, and the potential to wield magic.',
    'series' => 
    [
      0 => 3614,
      1 => 2116,
      2 => 744,
      3 => 354,
      4 => 1991,
      5 => 1340,
      6 => 15305,
      7 => 1537,
      8 => 784,
      9 => 2115,
      10 => 2226,
      11 => 1726,
      12 => 15691,
      13 => 9120,
      14 => 4002,
      15 => 1995,
      16 => 693,
      17 => 3874,
      18 => 3751,
      19 => 5260,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/40/526963dad214d.jpg',
  ],
  1009630 => 
  [
    'name' => 'Johnny Storm',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009631 => 
  [
    'name' => 'Sue Storm',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/a0/52695b9cd40b6.jpg',
  ],
  1009632 => 
  [
    'name' => 'Stryfe',
    'description' => 'Stryfe is the clone of Nathan Christopher Summers, alias Cable, the son of Cyclops of the X-Men.',
    'series' => 
    [
      0 => 4002,
      1 => 1995,
      2 => 4059,
      3 => 6668,
      4 => 2011,
      5 => 2258,
      6 => 2262,
      7 => 2098,
      8 => 1915,
      9 => 5068,
      10 => 3633,
      11 => 13428,
      12 => 14479,
      13 => 14480,
      14 => 2265,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/a0/527413b06270b.jpg',
  ],
  1009633 => 
  [
    'name' => 'William Stryker',
    'description' => 'William Stryker became convinced that Satan had a plot to corrupt humankind by taking over their souls while still in the womb, resulting in their mutations.',
    'series' => 
    [
      0 => 15297,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/90/4c003abcc72e7.jpg',
  ],
  1009635 => 
  [
    'name' => 'Sumo',
    'description' => '',
    'series' => 
    [
      0 => 3633,
    ],
    'img' => false,
  ],
  1009636 => 
  [
    'name' => 'Sunfire',
    'description' => 'Shiro Yoshida’s mother was exposed to the atomic devastation of Hiroshima during World War II and died giving birth to him.',
    'series' => 
    [
      0 => 1816,
      1 => 1995,
      2 => 378,
      3 => 1806,
      4 => 479,
      5 => 154,
      6 => 116,
      7 => 2029,
      8 => 2039,
      9 => 1440,
      10 => 1689,
      11 => 2049,
      12 => 8140,
      13 => 2055,
      14 => 787,
      15 => 2059,
      16 => 2431,
      17 => 15295,
      18 => 2989,
      19 => 16414,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/7/00/53629b9e24ef5.jpg',
  ],
  1009637 => 
  [
    'name' => 'Sunset Bain',
    'description' => '',
    'series' => 
    [
      0 => 2572,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/10/4c003ab9ed7d6.jpg',
  ],
  1009638 => 
  [
    'name' => 'Sunspot',
    'description' => 'Growing up in a wealthy Brazilian family, Roberto da Costa was forging a career as a skilled soccer player until his mutant nature manifested during a match.',
    'series' => 
    [
      0 => 6792,
      1 => 1995,
      2 => 3874,
      3 => 378,
      4 => 1806,
      5 => 2039,
      6 => 3719,
      7 => 1595,
      8 => 1430,
      9 => 11477,
      10 => 2055,
      11 => 7455,
      12 => 563,
      13 => 1763,
      14 => 13519,
      15 => 2054,
      16 => 1186,
      17 => 267,
      18 => 2059,
      19 => 2702,
    ],
    'img' => '.',
  ],
  1009639 => 
  [
    'name' => 'Super-Skrull',
    'description' => 'After the Fantastic Four stopped the Skrulls\' attempted invasion of Earth, Skrull Emperor Dorrek invested vast resources into creating a superbeing of his own.',
    'series' => 
    [
      0 => 3061,
      1 => 1080,
      2 => 3621,
      3 => 1945,
      4 => 977,
      5 => 2423,
    ],
    'img' => '.',
  ],
  1009640 => 
  [
    'name' => 'Switch',
    'description' => '',
    'series' => 
    [
      0 => 3633,
    ],
    'img' => false,
  ],
  1009641 => 
  [
    'name' => 'Swordsman',
    'description' => 'Andreas reappeared as the Swordsman in the latest incarnation of the Thunderbolts, though his true identity was kept secret for some time.',
    'series' => 
    [
      0 => 3621,
      1 => 354,
      2 => 1340,
      3 => 1496,
      4 => 98,
      5 => 13527,
      6 => 13257,
      7 => 1813,
      8 => 788,
      9 => 1331,
      10 => 1514,
      11 => 2725,
      12 => 18527,
      13 => 2945,
      14 => 2427,
    ],
    'img' => '.',
  ],
  1009642 => 
  [
    'name' => 'Sym',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009643 => 
  [
    'name' => 'Synch',
    'description' => 'Everett Thomas was a founding member of Generation X.',
    'series' => 
    [
      0 => 1995,
      1 => 2258,
      2 => 2262,
      3 => 2265,
      4 => 3637,
      5 => 4020,
      6 => 5761,
      7 => 2102,
      8 => 1685,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4c002e0305708.gif',
  ],
  1009644 => 
  [
    'name' => 'T\'Challa',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009645 => 
  [
    'name' => 'Glenn Talbot',
    'description' => 'Major Glenn Talbot was member of United States Air Force, United States Army and Hulkbusters.',
    'series' => 
    [
      0 => 1991,
      1 => 8842,
    ],
    'img' => false,
  ],
  1009646 => 
  [
    'name' => 'Talisman (Elizabeth Twoyoungmen)',
    'description' => 'Elizabeth Twoyoungmen was born in Calgary, Alberta, Canada, the daughter of Michael Twoyoungman (Shaman) of the Canadian superhero team Alpha Flight.',
    'series' => 
    [
      0 => 2116,
      1 => 3741,
    ],
    'img' => false,
  ],
  1009647 => 
  [
    'name' => 'Tarot',
    'description' => '',
    'series' => 
    [
      0 => 2258,
      1 => 3633,
    ],
    'img' => false,
  ],
  1009648 => 
  [
    'name' => 'Taskmaster',
    'description' => 'Taskmaster first exhibited his unusual ability, called "photographic reflexes," which allowed him to mimic the motion of anyone he saw, when he was a young boy.',
    'series' => 
    [
      0 => 10235,
      1 => 459,
      2 => 13907,
      3 => 9086,
      4 => 1945,
      5 => 15370,
      6 => 693,
      7 => 2710,
      8 => 1996,
      9 => 12817,
      10 => 9368,
      11 => 3744,
      12 => 108,
      13 => 2005,
      14 => 9887,
      15 => 7713,
      16 => 13691,
      17 => 13787,
      18 => 12839,
      19 => 13213,
    ],
    'img' => '.',
  ],
  1009650 => 
  [
    'name' => 'Tempest',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1737,
      2 => 2445,
      3 => 2027,
      4 => 2572,
      5 => 1440,
      6 => 2060,
      7 => 2258,
      8 => 1723,
      9 => 139,
      10 => 1775,
    ],
    'img' => false,
  ],
  1009651 => 
  [
    'name' => 'Terrax',
    'description' => 'Tyros was once the dictator of the city Lanlak on the planet Birj, where his superhuman ability to command rocks and earth enabled him to overcome all resistance, but his rule of Lanlak came to an end when he was sought by the world-devouring Galactus to serve as his latest Herald.',
    'series' => 
    [
      0 => 3621,
      1 => 3745,
      2 => 479,
      3 => 116,
      4 => 2123,
      5 => 2121,
      6 => 341,
      7 => 1813,
      8 => 1812,
      9 => 1814,
      10 => 13577,
      11 => 3715,
      12 => 15297,
    ],
    'img' => false,
  ],
  1009652 => 
  [
    'name' => 'Thanos',
    'description' => 'The Mad Titan Thanos, a melancholy, brooding individual, consumed with the concept of death, sought out personal power and increased strength, endowing himself with cybernetic implants until he became more powerful than any of his brethren.',
    'series' => 
    [
      0 => 2116,
      1 => 10035,
      2 => 1988,
      3 => 15373,
      4 => 2000,
      5 => 2005,
      6 => 13506,
      7 => 3741,
      8 => 2121,
      9 => 124,
      10 => 3727,
      11 => 6449,
      12 => 2023,
      13 => 2039,
      14 => 4578,
      15 => 4577,
      16 => 3715,
      17 => 164,
      18 => 2059,
      19 => 2431,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/40/5274137e3e2cd.jpg',
  ],
  1009653 => 
  [
    'name' => 'The Anarchist',
    'description' => '',
    'series' => 
    [
      0 => 462,
      1 => 226,
      2 => 153,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/60/4c003aacdeca9.jpg',
  ],
  1009654 => 
  [
    'name' => 'The Call',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009655 => 
  [
    'name' => 'The Fallen',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009656 => 
  [
    'name' => 'The Phantom',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009657 => 
  [
    'name' => 'The Professor',
    'description' => '',
    'series' => 
    [
      0 => 2262,
      1 => 317,
    ],
    'img' => false,
  ],
  1009658 => 
  [
    'name' => 'The Shiver Man',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/90/4c003aaa26ee9.jpg',
  ],
  1009659 => 
  [
    'name' => 'The Spike',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009660 => 
  [
    'name' => 'The Stranger',
    'description' => '',
    'series' => 
    [
      0 => 1683,
      1 => 3297,
      2 => 1671,
      3 => 206,
      4 => 14078,
      5 => 2080,
      6 => 2083,
      7 => 2258,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/80/4c0030fd08ad6.jpg',
  ],
  1009661 => 
  [
    'name' => 'The Watchers',
    'description' => '',
    'series' => 
    [
      0 => 1608,
      1 => 2082,
      2 => 12847,
      3 => 2265,
    ],
    'img' => false,
  ],
  1009662 => 
  [
    'name' => 'Thing',
    'description' => 'The radiation that mutated Reed Richards, Sue Storm and Johnny Storm into superhuman beings had also mutated Ben Grimm, transforming him into a grotesque, rock-hided strongman dubbed the Thing.',
    'series' => 
    [
      0 => 725,
      1 => 1253,
      2 => 2116,
      3 => 1983,
      4 => 454,
      5 => 3621,
      6 => 9085,
      7 => 354,
      8 => 1340,
      9 => 1496,
      10 => 1737,
      11 => 1816,
      12 => 2111,
      13 => 93,
      14 => 15305,
      15 => 1945,
      16 => 12973,
      17 => 1503,
      18 => 784,
      19 => 1726,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/00/527bb4d36b5c2.jpg',
  ],
  1009663 => 
  [
    'name' => 'Venom (Flash Thompson)',
    'description' => 'Flash Thompson was the high school bully of Peter Parker while also being one of Spider-Man\'s biggest fans. After losing his legs during military service, he became the new Venom, working as an operative of the United States government.',
    'series' => 
    [
      0 => 454,
      1 => 2984,
      2 => 5376,
      3 => 6604,
      4 => 1389,
      5 => 9799,
      6 => 969,
      7 => 2944,
      8 => 13911,
      9 => 14809,
    ],
    'img' => '.',
  ],
  1009664 => 
  [
    'name' => 'Thor',
    'description' => 'As the Norse God of thunder and lightning, Thor wields one of the greatest weapons ever made, the enchanted hammer Mjolnir.
While others have described Thor as an over-muscled, oafish imbecile, he\'s quite smart and compassionate.  He\'s self-assured, and he would never, ever stop fighting for a worthwhile cause.

',
    'series' => 
    [
      0 => 2116,
      1 => 1983,
      2 => 14779,
      3 => 9858,
      4 => 3621,
      5 => 9085,
      6 => 1991,
      7 => 354,
      8 => 9086,
      9 => 13320,
      10 => 1988,
      11 => 1340,
      12 => 15373,
      13 => 1496,
      14 => 1737,
      15 => 1816,
      16 => 2929,
      17 => 2384,
      18 => 1359,
      19 => 2111,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/d0/5269657a74350.jpg',
  ],
  1009666 => 
  [
    'name' => 'Thunderbird (John Proudstar)',
    'description' => 'An exceptionally strong and vigorous athlete in his youth, John Proudstar’s mutant abilities first manifested when he wrestled a charging bison to save a young girl.',
    'series' => 
    [
      0 => 1816,
      1 => 13588,
      2 => 3751,
      3 => 378,
      4 => 1806,
      5 => 479,
      6 => 154,
      7 => 116,
      8 => 1440,
      9 => 2049,
      10 => 1807,
      11 => 2281,
      12 => 56,
      13 => 2059,
      14 => 2431,
      15 => 2258,
      16 => 1723,
      17 => 2262,
      18 => 3633,
      19 => 2265,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/f0/4c003aa43b1ec.jpg',
  ],
  1009667 => 
  [
    'name' => 'Thunderbird (Neal Shaara)',
    'description' => 'Coming from an affluent family and the son of a Calcuttan police chief, Indian national Neal Shaara has not been a follower of Charles Xavier\'s philosophies for long, but appears to be one of their most dedicated supporters, nonetheless.',
    'series' => 
    [
      0 => 2258,
      1 => 2555,
      2 => 2265,
      3 => 1318,
      4 => 646,
      5 => 182,
      6 => 142,
      7 => 143,
      8 => 144,
      9 => 2107,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/c0/4c003aa0d9cf9.jpg',
  ],
  1009668 => 
  [
    'name' => 'Thunderbolt (Bill Carver)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009669 => 
  [
    'name' => 'Tiger Shark',
    'description' => 'A champion Olympic swimmer, Todd Arliss earned nearly half million dollars in advances for public exhibitions, but his dreams came crashing down around him when he injured his back and legs while rescuing a man who had fallen overboard from a private craft, sending Arliss into the arms of Dr. Lemuel Dorcas, who used his "morphotron," which could imprint the genetic pattern of an animal onto a human, turning Arliss into a superhuman, amphibious creature.',
    'series' => 
    [
      0 => 9994,
      1 => 9995,
      2 => 14059,
      3 => 3674,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/10/4c003a9db2f77.jpg',
  ],
  1009670 => 
  [
    'name' => 'Tigra (Greer Nelson)',
    'description' => 'Although she was able to use the cat\'s-head amulet to change back to her human form, Greer Nelson became so accustomed to and enamored of her feline form that she seldom made the transformation.',
    'series' => 
    [
      0 => 354,
      1 => 9086,
      2 => 10037,
      3 => 1988,
      4 => 1340,
      5 => 1816,
      6 => 6476,
      7 => 6473,
      8 => 1945,
      9 => 784,
      10 => 2226,
      11 => 1997,
      12 => 1067,
      13 => 2121,
      14 => 3730,
      15 => 1505,
      16 => 3065,
      17 => 2039,
      18 => 2045,
      19 => 2301,
    ],
    'img' => '.',
  ],
  1009671 => 
  [
    'name' => 'Trish Tilby',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009672 => 
  [
    'name' => 'Titanium Man (Topolov)',
    'description' => '',
    'series' => 
    [
      0 => 2116,
      1 => 1814,
      2 => 13577,
      3 => 2029,
      4 => 1846,
      5 => 1506,
      6 => 189,
      7 => 1494,
      8 => 3300,
      9 => 222,
      10 => 2079,
      11 => 2725,
      12 => 2083,
      13 => 223,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/b0/528d368ab3f46.jpg',
  ],
  1009673 => 
  [
    'name' => 'Toad',
    'description' => 'British-born Mortimer Toynbee, abandoned by his parents so early in childhood that he cannot remember them, was placed in an orphanage where the other children, who regarded him as a freak due to his ugliness, his unusual physique and his leaping ability, continually tormented him.',
    'series' => 
    [
      0 => 1991,
      1 => 3753,
      2 => 378,
      3 => 1806,
      4 => 479,
      5 => 154,
      6 => 1807,
      7 => 2281,
      8 => 56,
      9 => 2258,
      10 => 2262,
      11 => 84,
      12 => 85,
      13 => 6688,
      14 => 2098,
      15 => 6689,
      16 => 3633,
      17 => 14480,
      18 => 14479,
      19 => 9906,
    ],
    'img' => '.',
  ],
  1009674 => 
  [
    'name' => 'Toad Men',
    'description' => '',
    'series' => 
    [
      0 => 2021,
    ],
    'img' => false,
  ],
  1009675 => 
  [
    'name' => 'Tombstone',
    'description' => 'Known as Tombstone, Lonnie Lincoln filed his teeth to points to add to his already intimidating image and honed his fighting skills in numerous street fights.',
    'series' => 
    [
      0 => 454,
      1 => 2576,
      2 => 2271,
      3 => 5860,
      4 => 2071,
      5 => 69,
      6 => 10445,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/40/4c003a981c496.jpg',
  ],
  1009676 => 
  [
    'name' => 'Toxin',
    'description' => 'NYPD Officer Patrick Mulligan was implanted with a symbiote offspring during a chance encounter with Carnage.',
    'series' => 
    [
      0 => 889,
      1 => 1522,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/30/4c003a94e668a.jpg',
  ],
  1009677 => 
  [
    'name' => 'Matsu\'o Tsurayaba',
    'description' => 'Tsurayaba became leader of a faction of the ninja clan the Hand, finding himself at odds with his lover Kwannon who was an assassin for rival crimelord Nyoirin.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/c0/4ce5a1efc3b2c.jpg',
  ],
  1009678 => 
  [
    'name' => 'Tusk',
    'description' => '',
    'series' => 
    [
      0 => 2098,
      1 => 2265,
    ],
    'img' => false,
  ],
  1009679 => 
  [
    'name' => 'Tyger Tiger',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009680 => 
  [
    'name' => 'Tyrannus',
    'description' => '',
    'series' => 
    [
      0 => 421,
      1 => 8842,
      2 => 1671,
      3 => 1508,
      4 => 1364,
      5 => 2080,
      6 => 2258,
    ],
    'img' => false,
  ],
  1009681 => 
  [
    'name' => 'U-Go Girl',
    'description' => 'After a failed attempt at starting an acting career, Edie Sawyer turned to a life of crime until she learned of a new media savvy team of superhuman mutants named X-Force, and she decided to become a superhero.',
    'series' => 
    [
      0 => 3633,
      1 => 88,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/a0/4c003a91d4fe1.jpg',
  ],
  1009682 => 
  [
    'name' => 'U.S. Agent',
    'description' => 'With the end of the Vietnam War, John Walker thought his dreams of becoming a war hero had also ended, until he learned of the Power Broker, who could give anyone superhuman powers, which Walker used to first become Super-Patriot and later, U.S. Agent.',
    'series' => 
    [
      0 => 2116,
      1 => 3623,
      2 => 832,
      3 => 1997,
      4 => 1996,
      5 => 13199,
      6 => 8842,
      7 => 2029,
      8 => 2039,
      9 => 2301,
      10 => 1504,
      11 => 1866,
    ],
    'img' => '.',
  ],
  1009683 => 
  [
    'name' => 'Uatu The Watcher',
    'description' => 'Uatu grew so fond of the lifeforms he observed that he occasionally violated his vow of non-interference when Earth\'s existence was threatened.',
    'series' => 
    [
      0 => 13199,
      1 => 2005,
      2 => 11518,
      3 => 12988,
      4 => 2121,
      5 => 421,
      6 => 1814,
      7 => 13577,
      8 => 15297,
      9 => 581,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/03/5274135912e8d.jpg',
  ],
  1009684 => 
  [
    'name' => 'Ultimatum',
    'description' => '',
    'series' => 
    [
      0 => 13213,
    ],
    'img' => false,
  ],
  1009685 => 
  [
    'name' => 'Ultron',
    'description' => 'Arguably the greatest and certainly the most horrific creation of scientific genius Dr. Henry Pym, Ultron is a criminally insane rogue sentient robot dedicated to conquest and the extermination of humanity.',
    'series' => 
    [
      0 => 9994,
      1 => 9995,
      2 => 17318,
      3 => 3061,
      4 => 3621,
      5 => 1991,
      6 => 354,
      7 => 1340,
      8 => 1496,
      9 => 1816,
      10 => 94,
      11 => 9863,
      12 => 6476,
      13 => 6473,
      14 => 1992,
      15 => 2002,
      16 => 2121,
      17 => 1813,
      18 => 2572,
      19 => 1708,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/70/5261a838e93c0.jpg',
  ],
  1009686 => 
  [
    'name' => 'Umar',
    'description' => 'Umar and her sibling Dormammu gathered matter to themselves to increase their power, a practice anathema to their fellow Faltine who consider energy to be superior to matter.',
    'series' => 
    [
      0 => 3741,
      1 => 8842,
      2 => 1468,
      3 => 2076,
    ],
    'img' => false,
  ],
  1009687 => 
  [
    'name' => 'Unus',
    'description' => 'Angelo Unuscione is a mutant whose powers did not surface until adolescence, when he first used them as a school bully and later as a small time criminal before immigrating to America and using his ability to create a virtually impenetrable force field around himself to launch a career as a flamboyant, invincible costumed wrestler known by the stage name of Unus the Untouchable.',
    'series' => 
    [
      0 => 6666,
      1 => 1508,
      2 => 179,
      3 => 206,
      4 => 6041,
      5 => 6040,
      6 => 2281,
      7 => 1807,
      8 => 56,
      9 => 2258,
      10 => 2104,
      11 => 1583,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/00/4c003a847f5d2.jpg',
  ],
  1009688 => 
  [
    'name' => 'Carmella Unuscione',
    'description' => 'Carmella Unuscione was one of the first members of the Magneto\'s Acolytes.',
    'series' => 
    [
      0 => 2011,
      1 => 2258,
      2 => 2265,
    ],
    'img' => false,
  ],
  1009689 => 
  [
    'name' => 'Vanisher (Ultimate)',
    'description' => 'Vanisher is a mutant with the power to teleport himself and possibly others across an undefined amount of distance who was recruited by Magneto into his Brotherhood of Mutants.',
    'series' => 
    [
      0 => 3659,
      1 => 216,
      2 => 2258,
    ],
    'img' => false,
  ],
  1009690 => 
  [
    'name' => 'Vargas',
    'description' => 'Vargas claimed that mutants are deviations from the norm, an evolutionary dead end nature explored until it found the true path for the next step in mutant kinds development, the legitimate Homo Sapiens Superior, namely, himself.',
    'series' => 
    [
      0 => 646,
      1 => 142,
      2 => 143,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/80/4c003a81cef50.jpg',
  ],
  1009691 => 
  [
    'name' => 'Vengeance (Michael Badilino)',
    'description' => 'Michael Badilino became consumed with gaining vengeance on Ghost Rider for what happened to his family, and the demon Mephisto granted him the power with which to do so, transforming him into Vengeance.',
    'series' => 
    [
      0 => 3741,
      1 => 2039,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/e0/528d3655b9f06.jpg',
  ],
  1009692 => 
  [
    'name' => 'Toxin (Eddie Brock)',
    'description' => '',
    'series' => 
    [
      0 => 2234,
      1 => 1987,
      2 => 454,
      3 => 318,
      4 => 6604,
      5 => 2002,
      6 => 378,
      7 => 1806,
      8 => 2029,
      9 => 866,
      10 => 3713,
      11 => 13315,
      12 => 2059,
      13 => 2431,
      14 => 2702,
      15 => 2271,
      16 => 2060,
      17 => 722,
      18 => 556,
      19 => 263,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/80/52bc827d4ed09.jpg',
  ],
  1009693 => 
  [
    'name' => 'Venus Dee Milo',
    'description' => 'When Dee Milo was a teenager, her mutant powers manifested, transforming her into a being of energy and seemingly killing her entire family in the resultant explosion, after which she was found by Professor Charles Xavier, mutant mentor and researcher, and Xavier designed a special containment suit that helped her regain some level of humanity.',
    'series' => 
    [
      0 => 462,
      1 => 226,
      2 => 153,
    ],
    'img' => false,
  ],
  1009694 => 
  [
    'name' => 'Vertigo (Savage Land Mutate)',
    'description' => 'Vertigo was a native of the Savage Land and mutated by the mutant known as Magneto, granting her the power to alter the perceptions of others.',
    'series' => 
    [
      0 => 3719,
      1 => 753,
      2 => 1260,
      3 => 2083,
      4 => 2716,
      5 => 2258,
      6 => 2098,
      7 => 92,
      8 => 343,
      9 => 144,
      10 => 2107,
    ],
    'img' => false,
  ],
  1009695 => 
  [
    'name' => 'Vindicator',
    'description' => 'Heather McNeil-Hudson married James Hudson, founder of Canadian super-team, Alpha Flight, and donned a version of his Vindicator armor after his death.',
    'series' => 
    [
      0 => 13907,
      1 => 2116,
      2 => 1983,
      3 => 2115,
      4 => 3719,
      5 => 1440,
      6 => 2258,
      7 => 1723,
      8 => 3637,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/b0/4c003a7f39967.jpg',
  ],
  1009696 => 
  [
    'name' => 'Viper',
    'description' => 'After the apparent death of Baron von Strucker, Viper took the name Madame Hydra and took control of the New York-based faction of Hydra.',
    'series' => 
    [
      0 => 6792,
      1 => 1996,
      2 => 740,
      3 => 1814,
      4 => 13577,
      5 => 9922,
      6 => 753,
      7 => 1446,
      8 => 367,
      9 => 5860,
      10 => 6796,
      11 => 2258,
      12 => 2262,
      13 => 1849,
      14 => 7056,
      15 => 85,
      16 => 2265,
      17 => 646,
      18 => 143,
    ],
    'img' => false,
  ],
  1009697 => 
  [
    'name' => 'Vision',
    'description' => 'The metal monstrosity called Ultron created the synthetic humanoid known as the Vision from the remains of the original android Human Torch of the 1940s to serve as a vehicle of vengeance against the Avengers.',
    'series' => 
    [
      0 => 2116,
      1 => 1991,
      2 => 354,
      3 => 3621,
      4 => 1988,
      5 => 1340,
      6 => 1496,
      7 => 1737,
      8 => 1816,
      9 => 2929,
      10 => 2384,
      11 => 2111,
      12 => 1990,
      13 => 93,
      14 => 94,
      15 => 9863,
      16 => 158,
      17 => 227,
      18 => 271,
      19 => 1497,
    ],
    'img' => '.',
  ],
  1009698 => 
  [
    'name' => 'Vivisector',
    'description' => '',
    'series' => 
    [
      0 => 3633,
      1 => 88,
      2 => 462,
      3 => 226,
      4 => 153,
    ],
    'img' => false,
  ],
  1009699 => 
  [
    'name' => 'Vulture (Adrian Toomes)',
    'description' => 'Adrian Toomes is a former electronics engineer who employs a special harness of his own design that allows him to fly and endows him with enhanced strength.',
    'series' => 
    [
      0 => 454,
      1 => 1987,
      2 => 2002,
      3 => 449,
      4 => 18,
      5 => 24,
      6 => 378,
      7 => 1806,
      8 => 1427,
      9 => 877,
      10 => 1895,
      11 => 2301,
      12 => 2055,
      13 => 2271,
      14 => 1979,
      15 => 2071,
      16 => 68,
      17 => 69,
      18 => 10445,
      19 => 1330,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/50/4c003a7929d28.jpg',
  ],
  1009700 => 
  [
    'name' => 'Wallow',
    'description' => 'Max Pressman murdered his wife and attempted to murder his two children Michael and Melinda, but after police officer shot him before he could so, Pressman returned as a ghost-like entity, with only the face of Melinda\'s doll as his own.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009701 => 
  [
    'name' => 'War (Abraham Kieros)',
    'description' => 'A young veteran wounded during the Vietnam War, Abraham Kieros was selected by Apocalypse to become the Horseman War.',
    'series' => 
    [
      0 => 2258,
      1 => 2098,
      2 => 5068,
      3 => 3640,
      4 => 1452,
    ],
    'img' => false,
  ],
  1009702 => 
  [
    'name' => 'Rhodey',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009703 => 
  [
    'name' => 'Warbird',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009704 => 
  [
    'name' => 'Warlock (Janie Chin)',
    'description' => 'College design student Janie Chin was transformed by Adam Warlock into a female version of him, who then tried to cure the planet.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009705 => 
  [
    'name' => 'Warpath',
    'description' => 'James Proudstar was once a member of Professor X\'s New Mutants and is currently a member of the X-Men black ops team, X-Force.',
    'series' => 
    [
      0 => 1995,
      1 => 4002,
      2 => 5260,
      3 => 2005,
      4 => 1430,
      5 => 2053,
      6 => 1807,
      7 => 2281,
      8 => 56,
      9 => 2258,
      10 => 2098,
      11 => 6689,
      12 => 3839,
      13 => 3633,
      14 => 88,
      15 => 13428,
      16 => 9906,
      17 => 2265,
      18 => 2100,
      19 => 4020,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/e0/526035de08b23.jpg',
  ],
  1009706 => 
  [
    'name' => 'Warstar',
    'description' => 'Warstar, a former member of the Imperial Guard, was one of eight Imperial Guardsmen chosen to battle the team of superhuman Earthling mutants known as the X-Men over the fate of Phoenix, a primal force of the cosmos that had assumed the form of the X-Man Jean Grey.',
    'series' => 
    [
      0 => 2445,
      1 => 2027,
      2 => 1440,
      3 => 2258,
      4 => 139,
      5 => 1775,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/e0/4c003a73b6673.jpg',
  ],
  1009707 => 
  [
    'name' => 'Wasp',
    'description' => 'When Janet Van Dyne\'s father died, she convinced her father\'s associate Hank Pym to give her a supply of "Pym particles"; Pym also subjected her to a procedure which granted her the ability to, upon shrinking, grow wings and fire blasts of energy, which she called her "wasp\'s stings."',
    'series' => 
    [
      0 => 6079,
      1 => 7524,
      2 => 13540,
      3 => 354,
      4 => 9085,
      5 => 3621,
      6 => 1991,
      7 => 9086,
      8 => 1988,
      9 => 1340,
      10 => 1496,
      11 => 1737,
      12 => 1816,
      13 => 2929,
      14 => 2384,
      15 => 2111,
      16 => 93,
      17 => 9860,
      18 => 9863,
      19 => 158,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/c0/5390dfd5ef165.jpg',
  ],
  1009708 => 
  [
    'name' => 'Mary Jane Watson',
    'description' => 'Mary Jane Watson was the guiding light in Peter Parker\'s life, and their love had overcome countless obstacles.',
    'series' => 
    [
      0 => 454,
      1 => 2984,
      2 => 5376,
      3 => 1489,
      4 => 318,
      5 => 1394,
      6 => 2005,
      7 => 877,
      8 => 2572,
      9 => 721,
      10 => 1501,
      11 => 882,
      12 => 753,
      13 => 1446,
      14 => 722,
      15 => 969,
      16 => 1633,
      17 => 2230,
      18 => 2944,
      19 => 711,
    ],
    'img' => '.',
  ],
  1009709 => 
  [
    'name' => 'Weapon X',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009710 => 
  [
    'name' => 'Wendigo',
    'description' => '',
    'series' => 
    [
      0 => 1207,
      1 => 2021,
      2 => 1440,
      3 => 2258,
      4 => 2262,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/70/4ce5a1fa7a013.jpg',
  ],
  1009711 => 
  [
    'name' => 'Whiplash (Mark Scarlotti)',
    'description' => 'Filled with dreams of grandeur, Mark Scarlotti was a brilliant young man with a bright future who graduated with top honors from college and immediately had a promising job at Stark International, but it all went south, however, when he became friends with the wrong people who wanted him to develop weapons, which Scarlotti used to become the first Whiplash.',
    'series' => 
    [
      0 => 2005,
      1 => 2029,
      2 => 2572,
      3 => 1494,
      4 => 2079,
      5 => 2725,
    ],
    'img' => false,
  ],
  1009712 => 
  [
    'name' => 'White Queen (Adrienne Frost)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009713 => 
  [
    'name' => 'Debra Whitman',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009714 => 
  [
    'name' => 'Wiccan',
    'description' => 'Believing himself to be one of the Scarlet Witch\'s twin boys, Billy Kaplan also has reality-altering powers and is a member of the Young Avengers.',
    'series' => 
    [
      0 => 13447,
      1 => 9864,
      2 => 1945,
      3 => 1067,
      4 => 1866,
      5 => 9765,
      6 => 756,
      7 => 1250,
      8 => 1661,
      9 => 1955,
    ],
    'img' => '.',
  ],
  1009715 => 
  [
    'name' => 'Wild Child',
    'description' => 'Kyle Gibney\'s mutant powers emerged at an early age and left him with a freakish appearance, horrifying his parents, who kicked him out of the house, where he was eventually found and experimented upon by the Secret Empire and, later, Department H, who dubbed Gibney Wild Child and placed him with Gamma Flight, the entry-level team whose recruits can eventually graduate to Alpha Flight.',
    'series' => 
    [
      0 => 2116,
      1 => 163,
      2 => 138,
      3 => 3652,
      4 => 3653,
      5 => 3649,
      6 => 2098,
      7 => 3640,
      8 => 2104,
      9 => 2101,
      10 => 1452,
      11 => 1583,
      12 => 1685,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/00/4c003a6b5d11a.jpg',
  ],
  1009716 => 
  [
    'name' => 'Wildside',
    'description' => '',
    'series' => 
    [
      0 => 2011,
      1 => 2098,
      2 => 1915,
      3 => 5068,
      4 => 3633,
    ],
    'img' => false,
  ],
  1009717 => 
  [
    'name' => 'Wolfsbane',
    'description' => 'Rahne Sinclair was an orphan in Scotland, raised by Reverend Craig, who, when her powers manifested, attempted to perform an exorcism to cast out what he perceived was the devil, after which Rahne was rescued by Doctor Moira MacTaggert who legally adopted her, and was introduced to Charles Xavier and enrolled as part of his New Mutants training team.',
    'series' => 
    [
      0 => 4002,
      1 => 378,
      2 => 1806,
      3 => 2011,
      4 => 3719,
      5 => 2055,
      6 => 4603,
      7 => 13519,
      8 => 3694,
      9 => 17554,
      10 => 2258,
      11 => 1035,
      12 => 2098,
      13 => 6689,
      14 => 1915,
      15 => 2930,
      16 => 14428,
      17 => 1882,
      18 => 3839,
      19 => 3637,
    ],
    'img' => '.',
  ],
  1009718 => 
  [
    'name' => 'Wolverine',
    'description' => 'Born with super-human senses and the power to heal from almost any wound, Wolverine was captured by a secret Canadian organization and given an unbreakable skeleton and claws. Treated like an animal, it took years for him to control himself. Now, he\'s a premiere member of both the X-Men and the Avengers.',
    'series' => 
    [
      0 => 15276,
      1 => 12429,
      2 => 9994,
      3 => 9995,
      4 => 6807,
      5 => 2116,
      6 => 1983,
      7 => 454,
      8 => 1987,
      9 => 2984,
      10 => 7197,
      11 => 14818,
      12 => 11110,
      13 => 9792,
      14 => 6792,
      15 => 6696,
      16 => 744,
      17 => 7576,
      18 => 1464,
      19 => 1298,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/60/537bcaef0f6cf.jpg',
  ],
  1009719 => 
  [
    'name' => 'Wonder Man',
    'description' => 'Simon Williams agreed to undergo an experiment to give him superhuman powers, and Baron Zemo gave him the costumed guise of Wonder Man, warning Simon that he would die without further treatments from Zemo in order to ensure his loyalty, but Simon betrayed Zemo to the Avengers and ultimately joined their ranks.',
    'series' => 
    [
      0 => 7524,
      1 => 6079,
      2 => 2116,
      3 => 354,
      4 => 1991,
      5 => 3621,
      6 => 1988,
      7 => 1340,
      8 => 1496,
      9 => 1737,
      10 => 1816,
      11 => 2929,
      12 => 2111,
      13 => 93,
      14 => 158,
      15 => 3623,
      16 => 4864,
      17 => 6476,
      18 => 6473,
      19 => 1679,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/40/4ce5a205a2322.jpg',
  ],
  1009720 => 
  [
    'name' => 'Wong',
    'description' => 'When Wong reached adulthood, the Ancient One sent him to the United States to his disciple, Doctor Stephen Strange, where has served Strange loyally and well for many years.',
    'series' => 
    [
      0 => 449,
      1 => 18,
      2 => 3743,
      3 => 3741,
      4 => 378,
      5 => 1806,
      6 => 3731,
      7 => 5861,
      8 => 3719,
      9 => 1712,
      10 => 2262,
      11 => 84,
      12 => 6045,
    ],
    'img' => '.',
  ],
  1009721 => 
  [
    'name' => 'John Wraith',
    'description' => 'A mutant with teleportation powers, Wraith served with Wolverine, Sabretooth, Maverick and Silver Fox in Team X, a covert operations unit formed by Weapon X.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009722 => 
  [
    'name' => 'X-23',
    'description' => 'A clone of the mutant Wolverine, X-23 was trained as a living weapon by a secretive government agency.  Now residing with the X-Men, she strives to recover her stolen youth and become a fully realized person.',
    'series' => 
    [
      0 => 9086,
      1 => 16875,
      2 => 4002,
      3 => 10110,
      4 => 9368,
      5 => 13881,
      6 => 749,
      7 => 1546,
      8 => 1667,
      9 => 1668,
      10 => 2227,
      11 => 14047,
      12 => 2258,
      13 => 1399,
      14 => 766,
      15 => 9367,
      16 => 14369,
      17 => 1277,
      18 => 14619,
      19 => 981,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/a0/50fec5ed6f3de.jpg',
  ],
  1009723 => 
  [
    'name' => 'X-Cutioner',
    'description' => '',
    'series' => 
    [
      0 => 6681,
      1 => 2258,
      2 => 13492,
    ],
    'img' => false,
  ],
  1009724 => 
  [
    'name' => 'X-Force',
    'description' => '',
    'series' => 
    [
      0 => 5260,
      1 => 5701,
      2 => 18537,
      3 => 1635,
      4 => 14151,
      5 => 2578,
      6 => 13508,
      7 => 13745,
      8 => 9976,
      9 => 3633,
      10 => 718,
      11 => 3839,
      12 => 1233,
      13 => 13888,
      14 => 88,
      15 => 13428,
      16 => 14479,
      17 => 14480,
      18 => 3458,
      19 => 2402,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/03/52603663b553d.jpg',
  ],
  1009725 => 
  [
    'name' => 'X-Man',
    'description' => 'A clone of Nathan Summers (Cable), Nate Grey was created in the "Age of Apocalypse" timeline by that timeline\'s Mr. Sinister for the sole purpose of destroying Apocalypse.',
    'series' => 
    [
      0 => 3614,
      1 => 1816,
      2 => 1995,
      3 => 2049,
      4 => 11477,
      5 => 7455,
      6 => 2057,
      7 => 2258,
      8 => 2262,
      9 => 3633,
      10 => 3643,
      11 => 3642,
      12 => 2265,
      13 => 4020,
      14 => 5761,
      15 => 2101,
      16 => 2102,
      17 => 1452,
      18 => 1583,
      19 => 1685,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/10/535febd73f84f.jpg',
  ],
  1009726 => 
  [
    'name' => 'X-Men',
    'description' => 'Feared and hated by humans because they\'re different, the X-Men are heroic mutants, individuals born with special powers who\'ve sworn to use their gifts to protect mutants as well as humans.',
    'series' => 
    [
      0 => 16450,
      1 => 3614,
      2 => 13615,
      3 => 13603,
      4 => 16449,
      5 => 6666,
      6 => 454,
      7 => 3618,
      8 => 3619,
      9 => 744,
      10 => 7576,
      11 => 14616,
      12 => 992,
      13 => 1464,
      14 => 1298,
      15 => 1422,
      16 => 1485,
      17 => 5055,
      18 => 9381,
      19 => 5998,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/03/510c08f345938.jpg',
  ],
  1009732 => 
  [
    'name' => 'X.S.E.',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009733 => 
  [
    'name' => 'Charles Xavier',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009734 => 
  [
    'name' => 'Xorn (Kuan-Yin Xorn)',
    'description' => 'Xorn, whose mutation manifested as a tiny, powerful star inside his head, was brainwashed into believing he was the reincarnation of Magneto.',
    'series' => 
    [
      0 => 8132,
      1 => 8131,
      2 => 563,
      3 => 1186,
      4 => 267,
      5 => 2281,
      6 => 1807,
      7 => 1166,
      8 => 56,
      9 => 2258,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/60/4c00394059727.jpg',
  ],
  1009735 => 
  [
    'name' => 'Mariko Yashida',
    'description' => 'Mariko Yashida was the daughter of Japanese crimelord Lord Shingen, leader of Clan Yashida, and one-time fiance of Wolverine.',
    'series' => 
    [
      0 => 14398,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/10/4c00393d65a55.jpg',
  ],
  1009736 => 
  [
    'name' => 'Yellow Claw',
    'description' => 'The Yellow Claw is Plan Tzu, the 19th Century descendant of and rightful successor to the legendary warlord Temujin, a.k.a. Genghis Khan.',
    'series' => 
    [
      0 => 1991,
      1 => 3719,
      2 => 1468,
      3 => 1837,
      4 => 2045,
      5 => 8852,
      6 => 6679,
      7 => 5851,
      8 => 2076,
    ],
    'img' => '.',
  ],
  1009738 => 
  [
    'name' => 'Zaladane',
    'description' => '',
    'series' => 
    [
      0 => 3751,
      1 => 3719,
      2 => 1440,
      3 => 2258,
      4 => 1723,
      5 => 3648,
      6 => 2100,
      7 => 211,
      8 => 242,
      9 => 1460,
      10 => 139,
      11 => 13492,
    ],
    'img' => '.',
  ],
  1009739 => 
  [
    'name' => 'Zeigeist',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1009740 => 
  [
    'name' => 'Arnim Zola',
    'description' => 'The frail, dwarfish Arnim Zola was born in 1930s Switzerland where he became the world\'s leading biochemist and genetic engineer.',
    'series' => 
    [
      0 => 1996,
      1 => 832,
      2 => 1707,
      3 => 2256,
      4 => 6688,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/b0/4c00393a4cb7c.jpg',
  ],
  1009741 => 
  [
    'name' => 'Zombie (Simon Garth)',
    'description' => 'War hero Simon Garth was turned into a zombie by his secretary, Layla, who was also a voodoo priestess, after being killed by his gardener, Gyps.',
    'series' => 
    [
      0 => 5850,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/10/4c003937c9ba4.jpg',
  ],
  1009742 => 
  [
    'name' => 'Zzzax',
    'description' => 'A chain reaction in an atomic reactor, a result of a terrorist attack, accidentally created a force that absorbed the electrolytes of the nearby humans\' brains, granting the explosion of energy a rudimentary sentience.  ',
    'series' => 
    [
      0 => 3374,
      1 => 8842,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/d0/4ced5ab9078c9.jpg',
  ],
  1010063 => 
  [
    'name' => 'Norrin Radd',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/50/4c00393385563.jpg',
  ],
  1010143 => 
  [
    'name' => 'Caretaker',
    'description' => '',
    'series' => 
    [
      0 => 3741,
    ],
    'img' => false,
  ],
  1010324 => 
  [
    'name' => 'Victor Von Doom',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010325 => 
  [
    'name' => 'Betty Brant',
    'description' => '',
    'series' => 
    [
      0 => 672,
      1 => 13383,
      2 => 454,
      3 => 2984,
      4 => 1945,
      5 => 1389,
      6 => 13911,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/a0/4c7c644f453fb.jpg',
  ],
  1010326 => 
  [
    'name' => 'Steve Rogers',
    'description' => '',
    'series' => 
    [
      0 => 9799,
    ],
    'img' => '.',
  ],
  1010327 => 
  [
    'name' => 'Stone Men',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010328 => 
  [
    'name' => 'Tomorrow Man',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010329 => 
  [
    'name' => 'Jane Foster',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1737,
      2 => 832,
      3 => 1612,
      4 => 15595,
      5 => 2572,
      6 => 581,
      7 => 2083,
      8 => 9953,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/90/4ce5a22b0d5f1.jpg',
  ],
  1010330 => 
  [
    'name' => 'Donald Blake',
    'description' => '',
    'series' => 
    [
      0 => 12947,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/d0/4ce5a23640434.jpg',
  ],
  1010331 => 
  [
    'name' => 'Monster Badoon',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010332 => 
  [
    'name' => 'Overlord',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010333 => 
  [
    'name' => 'Flying Dutchman',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010334 => 
  [
    'name' => 'Quasimodo',
    'description' => '',
    'series' => 
    [
      0 => 2111,
      1 => 93,
      2 => 10739,
      3 => 1263,
      4 => 2012,
      5 => 3731,
      6 => 3723,
      7 => 1346,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/d0/4c00392ddd605.jpg',
  ],
  1010335 => 
  [
    'name' => 'Triton',
    'description' => 'Triton is a member of the Inhumans.',
    'series' => 
    [
      0 => 9086,
      1 => 378,
      2 => 1806,
      3 => 2121,
      4 => 421,
      5 => 2123,
      6 => 2445,
      7 => 1812,
      8 => 2027,
      9 => 13577,
      10 => 2039,
      11 => 2989,
      12 => 3674,
      13 => 2098,
      14 => 6689,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/90/528d367108dfb.jpg',
  ],
  1010336 => 
  [
    'name' => 'Atlas (Team)',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1496,
      2 => 1737,
      3 => 2032,
      4 => 1588,
      5 => 788,
      6 => 1331,
      7 => 1514,
    ],
    'img' => false,
  ],
  1010337 => 
  [
    'name' => 'Lionheart',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010338 => 
  [
    'name' => 'Captain Marvel (Carol Danvers)',
    'description' => '',
    'series' => 
    [
      0 => 6079,
      1 => 7524,
      2 => 6807,
      3 => 672,
      4 => 13383,
      5 => 2116,
      6 => 454,
      7 => 14818,
      8 => 1991,
      9 => 354,
      10 => 9085,
      11 => 10035,
      12 => 9859,
      13 => 13320,
      14 => 1340,
      15 => 1496,
      16 => 1737,
      17 => 1816,
      18 => 2929,
      19 => 158,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/80/5269608c1be7a.jpg',
  ],
  1010339 => 
  [
    'name' => 'Silver Centurion',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010340 => 
  [
    'name' => 'Leopardon',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010341 => 
  [
    'name' => 'Deacon Frost',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010342 => 
  [
    'name' => 'Whistler',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010343 => 
  [
    'name' => 'Human Cannonball',
    'description' => '',
    'series' => 
    [
      0 => 2021,
    ],
    'img' => false,
  ],
  1010344 => 
  [
    'name' => 'Ronan',
    'description' => '',
    'series' => 
    [
      0 => 3613,
      1 => 3061,
      2 => 13025,
      3 => 14818,
      4 => 421,
      5 => 2445,
      6 => 13440,
      7 => 2572,
      8 => 2050,
      9 => 13604,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/f0/5260363fc40f2.jpg',
  ],
  1010345 => 
  [
    'name' => 'Sersi',
    'description' => 'Sersi is a member of the Eternals, a species diverted from humanity by experiments conducted by the Celestials one million years ago.',
    'series' => 
    [
      0 => 1991,
      1 => 354,
      2 => 1340,
      3 => 1737,
      4 => 2111,
      5 => 93,
      6 => 1679,
      7 => 1996,
      8 => 13468,
      9 => 2017,
      10 => 1770,
      11 => 2121,
      12 => 13858,
      13 => 2029,
      14 => 2271,
      15 => 2258,
      16 => 2098,
      17 => 2265,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/40/528d36c261af4.jpg',
  ],
  1010346 => 
  [
    'name' => 'Controller',
    'description' => '',
    'series' => 
    [
      0 => 2029,
      1 => 2572,
      2 => 6250,
      3 => 6249,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/60/4c003923719ff.jpg',
  ],
  1010347 => 
  [
    'name' => 'Mr. Hyde',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 1996,
      2 => 2002,
      3 => 3452,
      4 => 2021,
      5 => 2572,
      6 => 1439,
      7 => 753,
      8 => 1260,
      9 => 2071,
      10 => 69,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/30/4c7c64437b5a1.jpg',
  ],
  1010348 => 
  [
    'name' => 'Whirlwind',
    'description' => 'David Cannon was always a bully, so his mutant abilities naturally led him to a life of crime and petty thievery, until his constant defeat at the hands of the Hank Pym and the Wasp led him to create the Whirlwind identity.',
    'series' => 
    [
      0 => 1991,
      1 => 3621,
      2 => 354,
      3 => 1988,
      4 => 1340,
      5 => 94,
      6 => 98,
      7 => 14703,
      8 => 1813,
      9 => 1814,
      10 => 13577,
      11 => 1708,
      12 => 2071,
      13 => 69,
      14 => 2258,
      15 => 2715,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/a0/4c7c643e59215.jpg',
  ],
  1010349 => 
  [
    'name' => 'Nighthawk',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 2002,
      2 => 3743,
      3 => 14022,
      4 => 3731,
      5 => 3716,
      6 => 2059,
      7 => 2431,
      8 => 2702,
      9 => 944,
      10 => 1791,
      11 => 2554,
      12 => 1136,
      13 => 3685,
      14 => 4006,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/80/4c00391ba3a93.jpg',
  ],
  1010350 => 
  [
    'name' => 'Valkyrie (Samantha Parrington)',
    'description' => 'Amora magically transformed Samantha Parrington into a raging, man-hating facsimile of the Asgardian warrior goddess Brunnhilde the Valkyrie, whose form and might Amora could replicate at will, having trapped Brunnhilde\'s soul in a mystical crystal centuries earlier.',
    'series' => 
    [
      0 => 1991,
      1 => 3743,
      2 => 3741,
      3 => 3731,
      4 => 13065,
      5 => 2039,
      6 => 2300,
      7 => 9799,
      8 => 886,
      9 => 9973,
      10 => 6686,
      11 => 2100,
      12 => 211,
      13 => 242,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/00/535fed8a3a00f.jpg',
  ],
  1010351 => 
  [
    'name' => 'Hellcat (Patsy Walker)',
    'description' => '',
    'series' => 
    [
      0 => 3621,
      1 => 354,
      2 => 1340,
      3 => 1496,
      4 => 1737,
      5 => 2111,
      6 => 93,
      7 => 3743,
      8 => 13065,
      9 => 1813,
      10 => 1814,
      11 => 13577,
      12 => 2039,
      13 => 2301,
      14 => 886,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/30/4d751d6b1bc7d.jpg',
  ],
  1010352 => 
  [
    'name' => 'Madame Masque',
    'description' => '',
    'series' => 
    [
      0 => 1945,
      1 => 4889,
      2 => 2572,
      3 => 2029,
      4 => 9748,
    ],
    'img' => '.',
  ],
  1010353 => 
  [
    'name' => 'Vermin (Edward Whelan)',
    'description' => 'Edward Whelan was found roaming the streets of New York by Baron Helmut Zemo, who subjected Whelan to Zemo\'s genetic experiments, which granted him superhuman strength, but, in the process of the mutation, he manifested a rat-like physical appearance, and was called Vermin.',
    'series' => 
    [
      0 => 454,
      1 => 1996,
      2 => 2271,
      3 => 2262,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/b0/528d3638185cb.jpg',
  ],
  1010354 => 
  [
    'name' => 'Adam Warlock',
    'description' => 'Adam Warlock is an artificially created human who was born in a cocoon at a scientific complex called The Beehive.',
    'series' => 
    [
      0 => 3061,
      1 => 2111,
      2 => 93,
      3 => 3874,
      4 => 3741,
      5 => 378,
      6 => 1806,
      7 => 2121,
      8 => 2021,
      9 => 2983,
      10 => 6449,
      11 => 2039,
      12 => 1697,
      13 => 1837,
      14 => 2045,
      15 => 2301,
      16 => 3715,
      17 => 1504,
      18 => 563,
      19 => 7455,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/f0/5202887448860.jpg',
  ],
  1010355 => 
  [
    'name' => 'Elements of Doom',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010356 => 
  [
    'name' => 'Black Queen',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010357 => 
  [
    'name' => 'Patch',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010358 => 
  [
    'name' => 'Ulik',
    'description' => 'Ulik was a Rock Troll from the realm known as Nornheim, located underground within the dimension of Asgard.',
    'series' => 
    [
      0 => 10725,
      1 => 13569,
      2 => 2576,
      3 => 581,
      4 => 2083,
      5 => 2978,
      6 => 133,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/c0/4d3f3b2078758.jpg',
  ],
  1010359 => 
  [
    'name' => 'The Hand',
    'description' => '',
    'series' => 
    [
      0 => 5701,
      1 => 1866,
      2 => 753,
      3 => 6796,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/b0/52bc82337d577.jpg',
  ],
  1010360 => 
  [
    'name' => 'Thunderbolts',
    'description' => 'After a battle with Onslaught left the world without the majority of the heroes that made it feel safe, Baron Zemo devised a plan like no other in order to rule the world. Zemo gathered Beetle, Fixer, Goliath, Moonstone, and Screaming Mimi, all former members of the Masters of Evil, together to disguise themselves as a new heroic team in order to take advantage of the missing heroes and gain the trust of the authorities and public in general. ',
    'series' => 
    [
      0 => 454,
      1 => 1737,
      2 => 1885,
      3 => 8456,
      4 => 4889,
      5 => 788,
      6 => 1514,
      7 => 1547,
      8 => 6796,
      9 => 14429,
      10 => 2296,
      11 => 18527,
      12 => 2945,
      13 => 13490,
      14 => 10509,
      15 => 13852,
      16 => 2427,
      17 => 13143,
      18 => 3643,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/a0/50fec50a26dc1.jpg',
  ],
  1010361 => 
  [
    'name' => 'Meteorite',
    'description' => '',
    'series' => 
    [
      0 => 13490,
    ],
    'img' => false,
  ],
  1010362 => 
  [
    'name' => 'Moonstone',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 354,
      2 => 1496,
      3 => 1816,
      4 => 6599,
      5 => 378,
      6 => 1806,
      7 => 2049,
      8 => 987,
      9 => 788,
      10 => 1547,
      11 => 2271,
      12 => 14429,
      13 => 18527,
      14 => 2296,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/00/535ff3e867252.jpg',
  ],
  1010363 => 
  [
    'name' => 'Logan',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010365 => 
  [
    'name' => 'Nebula',
    'description' => '',
    'series' => 
    [
      0 => 2121,
      1 => 2254,
      2 => 14078,
      3 => 211,
      4 => 242,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/30/528d339973337.jpg',
  ],
  1010366 => 
  [
    'name' => 'Boom Boom',
    'description' => 'When Tabitha Smith\'s mutant nature manifested at age 13, she ran away from her abusive home and eventually hooked up with the New Mutants and, subsequently, X-Force.',
    'series' => 
    [
      0 => 2053,
      1 => 2054,
      2 => 2098,
      3 => 6689,
      4 => 3633,
      5 => 2100,
      6 => 211,
      7 => 242,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/00/4ce5a25d34245.jpg',
  ],
  1010367 => 
  [
    'name' => 'Masque',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 354,
      2 => 1737,
      3 => 2029,
      4 => 886,
      5 => 2258,
      6 => 2262,
      7 => 317,
      8 => 2098,
      9 => 3633,
      10 => 2265,
    ],
    'img' => false,
  ],
  1010368 => 
  [
    'name' => 'Dreadnoughts',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010369 => 
  [
    'name' => 'Typhoid Mary',
    'description' => 'Typhoid Mary, an enemy and former lover of Daredevil with psionic powers, including telekinesis, is also truly gravely mentally ill and not entirely responsible for her actions.',
    'series' => 
    [
      0 => 9994,
      1 => 9995,
      2 => 1945,
      3 => 11665,
      4 => 449,
      5 => 2002,
      6 => 181,
      7 => 229,
      8 => 5701,
      9 => 2005,
      10 => 14383,
      11 => 2271,
    ],
    'img' => '.',
  ],
  1010370 => 
  [
    'name' => 'Alpha Flight',
    'description' => '',
    'series' => 
    [
      0 => 719,
      1 => 2116,
      2 => 13907,
      3 => 1983,
      4 => 1234,
      5 => 1335,
      6 => 744,
      7 => 1995,
      8 => 11854,
      9 => 13468,
      10 => 2005,
      11 => 14399,
      12 => 2121,
      13 => 2123,
      14 => 1812,
      15 => 2021,
      16 => 3719,
      17 => 2258,
      18 => 2095,
      19 => 2262,
    ],
    'img' => '.',
  ],
  1010371 => 
  [
    'name' => 'Boomerang',
    'description' => '',
    'series' => 
    [
      0 => 1945,
      1 => 3097,
      2 => 449,
      3 => 1170,
      4 => 21,
      5 => 22,
      6 => 1683,
      7 => 3297,
      8 => 1671,
      9 => 2071,
      10 => 69,
      11 => 17554,
      12 => 2080,
      13 => 18527,
      14 => 2093,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/30/4c00390504a3b.jpg',
  ],
  1010372 => 
  [
    'name' => 'Warhawk (Mitchell Tanner)',
    'description' => '',
    'series' => 
    [
      0 => 1440,
      1 => 2045,
      2 => 2258,
      3 => 1723,
      4 => 2265,
    ],
    'img' => false,
  ],
  1010373 => 
  [
    'name' => 'Howard The Duck',
    'description' => '',
    'series' => 
    [
      0 => 14022,
      1 => 4766,
      2 => 4767,
      3 => 2882,
      4 => 3891,
      5 => 4768,
      6 => 4770,
      7 => 4771,
      8 => 3883,
      9 => 4545,
      10 => 4772,
      11 => 10351,
      12 => 3674,
      13 => 2095,
      14 => 3648,
      15 => 2265,
    ],
    'img' => '.',
  ],
  1010445 => 
  [
    'name' => 'Energizer',
    'description' => '',
    'series' => 
    [
      0 => 2258,
    ],
    'img' => false,
  ],
  1010450 => 
  [
    'name' => 'Lightspeed',
    'description' => '',
    'series' => 
    [
      0 => 1938,
      1 => 2258,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/a0/4c7c643921b8e.jpg',
  ],
  1010666 => 
  [
    'name' => 'Violations',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010667 => 
  [
    'name' => 'Jessica Drew',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010668 => 
  [
    'name' => 'Warren Worthington III',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010669 => 
  [
    'name' => 'Titania',
    'description' => 'Despondent and hopeless after it was discovered that she was not, in fact, Spider-Woman, Mary MacPherran encountered Doctor Doom, who offered her a chance to become superpowered in exchange for joining his army, to which Mary readily agreed, and Doom transformed her into Titania.',
    'series' => 
    [
      0 => 9086,
      1 => 2005,
      2 => 13857,
      3 => 13827,
      4 => 9924,
      5 => 3715,
      6 => 731,
      7 => 1336,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/20/526957a91a469.jpg',
  ],
  1010670 => 
  [
    'name' => 'Frog-Man',
    'description' => '',
    'series' => 
    [
      0 => 14698,
      1 => 13721,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4def9bf15ce30.jpg',
  ],
  1010671 => 
  [
    'name' => 'Enchantress (Amora)',
    'description' => '',
    'series' => 
    [
      0 => 3719,
      1 => 2083,
      2 => 680,
      3 => 1339,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/10/52740e0f3c733.jpg',
  ],
  1010672 => 
  [
    'name' => 'Amora',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010673 => 
  [
    'name' => 'Amphibian (Earth-712)',
    'description' => '',
    'series' => 
    [
      0 => 944,
      1 => 1791,
    ],
    'img' => false,
  ],
  1010674 => 
  [
    'name' => 'Anita Blake',
    'description' => '',
    'series' => 
    [
      0 => 1152,
      1 => 7552,
      2 => 2568,
      3 => 6427,
      4 => 9855,
      5 => 10005,
      6 => 9854,
      7 => 7197,
      8 => 2539,
      9 => 3892,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/a0/4c0038fa14452.jpg',
  ],
  1010675 => 
  [
    'name' => 'Humbug',
    'description' => '',
    'series' => 
    [
      0 => 1121,
      1 => 2700,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/7/20/4c7c6433e79f5.jpg',
  ],
  1010676 => 
  [
    'name' => 'Colleen Wing',
    'description' => 'Colleen Wing was raised in Japan by her grandfather Kanji Ozawa, who taught her the ways of a samurai, in which she became highly skilled, after which she teamed up with Misty Knight at the behest of Tony Stark as a new Heroes for Hire tasked with capturing superhumans who have not registered.',
    'series' => 
    [
      0 => 964,
      1 => 1626,
      2 => 1121,
      3 => 1966,
      4 => 2700,
      5 => 1140,
      6 => 3633,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/e0/52740e24bddb4.jpg',
  ],
  1010677 => 
  [
    'name' => 'Dracula',
    'description' => '',
    'series' => 
    [
      0 => 13765,
      1 => 3741,
      2 => 10619,
      3 => 13691,
      4 => 6670,
      5 => 6672,
      6 => 4766,
      7 => 14697,
      8 => 2961,
      9 => 3899,
      10 => 2039,
      11 => 3719,
      12 => 3718,
      13 => 2300,
      14 => 779,
      15 => 1258,
      16 => 2084,
      17 => 6058,
      18 => 6024,
      19 => 14153,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/03/526955af18612.jpg',
  ],
  1010678 => 
  [
    'name' => 'Hellion',
    'description' => '',
    'series' => 
    [
      0 => 8755,
      1 => 749,
      2 => 1546,
      3 => 1667,
      4 => 1668,
      5 => 868,
      6 => 5338,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/c0/4c0038ee5a898.jpg',
  ],
  1010679 => 
  [
    'name' => 'Julian Keller',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010680 => 
  [
    'name' => 'Wilson Fisk',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010681 => 
  [
    'name' => 'Mercury',
    'description' => '',
    'series' => 
    [
      0 => 1703,
      1 => 2300,
      2 => 749,
      3 => 1546,
      4 => 1667,
      5 => 868,
      6 => 5338,
    ],
    'img' => false,
  ],
  1010682 => 
  [
    'name' => 'Misty Knight',
    'description' => '',
    'series' => 
    [
      0 => 964,
      1 => 1626,
      2 => 1121,
      3 => 13330,
      4 => 1966,
      5 => 2700,
      6 => 3065,
      7 => 1140,
      8 => 8877,
      9 => 10922,
      10 => 14441,
      11 => 12171,
      12 => 13252,
      13 => 15283,
      14 => 15282,
      15 => 3633,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/90/511151789a863.jpg',
  ],
  1010683 => 
  [
    'name' => 'New Warriors',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 1991,
      2 => 1945,
      3 => 2039,
      4 => 839,
      5 => 2409,
      6 => 3449,
      7 => 1410,
      8 => 13518,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/0/03/527411a7204f7.jpg',
  ],
  1010684 => 
  [
    'name' => 'Night Thrasher',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1496,
      2 => 839,
      3 => 2409,
      4 => 1410,
      5 => 2083,
      6 => 6689,
      7 => 3633,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/e0/52695ac9de43e.jpg',
  ],
  1010685 => 
  [
    'name' => 'Nextwave',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/d0/4c0038e2924ca.jpg',
  ],
  1010686 => 
  [
    'name' => 'Arcana',
    'description' => '',
    'series' => 
    [
      0 => 944,
      1 => 1791,
    ],
    'img' => false,
  ],
  1010687 => 
  [
    'name' => 'Black Tarantula',
    'description' => '',
    'series' => 
    [
      0 => 1126,
      1 => 2234,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/a0/4c0038dfc1270.jpg',
  ],
  1010688 => 
  [
    'name' => 'Blur',
    'description' => '',
    'series' => 
    [
      0 => 944,
      1 => 1791,
      2 => 1124,
    ],
    'img' => false,
  ],
  1010689 => 
  [
    'name' => 'Doctor Spectrum',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 801,
      2 => 944,
      3 => 1791,
      4 => 13269,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/90/4dc2d94978576.jpg',
  ],
  1010690 => 
  [
    'name' => 'Microbe',
    'description' => '',
    'series' => 
    [
      0 => 839,
      1 => 1410,
    ],
    'img' => '.',
  ],
  1010691 => 
  [
    'name' => 'Molly Hayes',
    'description' => '',
    'series' => 
    [
      0 => 1908,
      1 => 1114,
      2 => 843,
      3 => 5338,
      4 => 1445,
      5 => 1631,
      6 => 1903,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/60/4c0037783e8b3.jpg',
  ],
  1010692 => 
  [
    'name' => 'Rockslide',
    'description' => '',
    'series' => 
    [
      0 => 4002,
      1 => 749,
      2 => 1667,
      3 => 2227,
      4 => 868,
      5 => 5338,
      6 => 13029,
    ],
    'img' => false,
  ],
  1010693 => 
  [
    'name' => 'Songbird',
    'description' => 'Melissa Gold grew up on the streets, adopting her mother\'s name "Mimi" as part of a hard, cold persona she developed as a survival mechanism.',
    'series' => 
    [
      0 => 354,
      1 => 1496,
      2 => 1737,
      3 => 788,
      4 => 1331,
      5 => 1514,
      6 => 1547,
      7 => 18527,
      8 => 2296,
      9 => 2945,
      10 => 13490,
      11 => 2427,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/10/4c0038da16738.jpg',
  ],
  1010694 => 
  [
    'name' => 'Speedball (Robert Baldwin)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/7/30/4d52f6a668e76.jpg',
  ],
  1010695 => 
  [
    'name' => 'Surge',
    'description' => 'Prior to enrolling at the Xavier Institute, Noriko Ashida lived on the street and was reliant on illegally obtained prescription drugs to reduce her highly accelerated mutant brain functions to a manageable rate.',
    'series' => 
    [
      0 => 14683,
      1 => 749,
      2 => 1668,
      3 => 5338,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/d0/4c0038d51109f.jpg',
  ],
  1010696 => 
  [
    'name' => 'Union Jack (Joseph Chapman)',
    'description' => 'Joey Chapman, the new Union Jack continued to fight evil, both alone and as a member of the Knights of Pendragon and the new Invaders.',
    'series' => 
    [
      0 => 832,
      1 => 1779,
      2 => 11825,
      3 => 10262,
      4 => 1073,
      5 => 2552,
      6 => 1075,
      7 => 2425,
      8 => 1670,
      9 => 1017,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/40/4c0038d27694a.jpg',
  ],
  1010697 => 
  [
    'name' => 'Virginia Dare',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010698 => 
  [
    'name' => 'Young Avengers',
    'description' => '',
    'series' => 
    [
      0 => 10056,
      1 => 9864,
      2 => 12973,
      3 => 1067,
      4 => 1114,
      5 => 1908,
      6 => 11872,
      7 => 1866,
      8 => 9765,
      9 => 756,
      10 => 3465,
      11 => 1250,
      12 => 1661,
      13 => 1955,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/c0/50fec602eed20.jpg',
  ],
  1010699 => 
  [
    'name' => 'Aaron Stack',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010701 => 
  [
    'name' => 'Elsa Bloodstone',
    'description' => '',
    'series' => 
    [
      0 => 9914,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/b0/4c0038ccbe4fa.jpg',
  ],
  1010702 => 
  [
    'name' => 'Gravity',
    'description' => '',
    'series' => 
    [
      0 => 10235,
      1 => 454,
      2 => 1945,
      3 => 1928,
      4 => 997,
      5 => 13855,
      6 => 887,
      7 => 1517,
      8 => 13602,
      9 => 14016,
    ],
    'img' => '.',
  ],
  1010703 => 
  [
    'name' => 'Hiroim',
    'description' => '',
    'series' => 
    [
      0 => 465,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/60/528d341abd6d9.jpg',
  ],
  1010704 => 
  [
    'name' => 'Iron Lad',
    'description' => '',
    'series' => 
    [
      0 => 13447,
      1 => 756,
      2 => 1250,
      3 => 1661,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/50/4c0038c9c6580.jpg',
  ],
  1010705 => 
  [
    'name' => 'Spectrum',
    'description' => '',
    'series' => 
    [
      0 => 1991,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/00/4c0030bee8c86.jpg',
  ],
  1010706 => 
  [
    'name' => 'Nicolaos',
    'description' => '',
    'series' => 
    [
      0 => 1152,
      1 => 7552,
      2 => 2568,
      3 => 2556,
      4 => 7273,
    ],
    'img' => false,
  ],
  1010707 => 
  [
    'name' => 'Nuke',
    'description' => '',
    'series' => 
    [
      0 => 944,
      1 => 1791,
      2 => 2375,
      3 => 1963,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/10/4ce5a28ac1c48.jpg',
  ],
  1010708 => 
  [
    'name' => 'Pandemic',
    'description' => '',
    'series' => 
    [
      0 => 403,
      1 => 2709,
    ],
    'img' => false,
  ],
  1010709 => 
  [
    'name' => 'Gunslinger',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010711 => 
  [
    'name' => 'Santa Claus',
    'description' => '',
    'series' => 
    [
      0 => 1123,
      1 => 2236,
      2 => 4766,
    ],
    'img' => false,
  ],
  1010712 => 
  [
    'name' => 'Shape',
    'description' => 'Often clashing with the heroes of the Squadron Supreme, the Shape was later subjected to the mind-altering behavior modification device used as part of the Squadron Supreme\'s "Utopia Program."',
    'series' => 
    [
      0 => 354,
      1 => 1340,
      2 => 944,
      3 => 1791,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/e0/4c0038c68a450.jpg',
  ],
  1010713 => 
  [
    'name' => 'Tarantula (Luis Alvarez)',
    'description' => 'Alvarez replaced the original Tarantula after his death by the dictatorship Delvadian government.',
    'series' => 
    [
      0 => 2984,
      1 => 1121,
      2 => 1966,
      3 => 2700,
    ],
    'img' => false,
  ],
  1010714 => 
  [
    'name' => 'The Captain',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010715 => 
  [
    'name' => 'The Hood',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/90/539a09a2863cf.jpg',
  ],
  1010716 => 
  [
    'name' => 'Zarda',
    'description' => '',
    'series' => 
    [
      0 => 944,
      1 => 1791,
    ],
    'img' => false,
  ],
  1010717 => 
  [
    'name' => 'Debrii',
    'description' => '',
    'series' => 
    [
      0 => 839,
      1 => 1410,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/a0/4c0038c02e75a.jpg',
  ],
  1010718 => 
  [
    'name' => 'Asgardian',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010719 => 
  [
    'name' => 'Daimon Hellstrom',
    'description' => '',
    'series' => 
    [
      0 => 1128,
      1 => 10361,
      2 => 15282,
      3 => 9962,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/60/4ce5a2959ba25.jpg',
  ],
  1010720 => 
  [
    'name' => 'Giant-dok',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010721 => 
  [
    'name' => 'Hulk-dok',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010722 => 
  [
    'name' => 'Human Robot',
    'description' => '',
    'series' => 
    [
      0 => 6807,
      1 => 1097,
      2 => 1980,
      3 => 832,
      4 => 5061,
      5 => 3127,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/60/4c7c642ee254c.jpg',
  ],
  1010724 => 
  [
    'name' => 'Maddog',
    'description' => '',
    'series' => 
    [
      0 => 1126,
      1 => 2234,
    ],
    'img' => false,
  ],
  1010725 => 
  [
    'name' => 'Makkari',
    'description' => '',
    'series' => 
    [
      0 => 1058,
      1 => 2017,
      2 => 1770,
      3 => 5053,
      4 => 1973,
    ],
    'img' => false,
  ],
  1010726 => 
  [
    'name' => 'M.O.D.O.K.',
    'description' => '',
    'series' => 
    [
      0 => 6792,
      1 => 9893,
      2 => 2882,
      3 => 3374,
      4 => 8842,
      5 => 4889,
      6 => 7043,
      7 => 1857,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/0/03/526034ba37851.jpg',
  ],
  1010727 => 
  [
    'name' => 'Spider-dok',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010728 => 
  [
    'name' => 'The Executioner',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/d0/4ce5a2ab860be.jpg',
  ],
  1010729 => 
  [
    'name' => 'Wolver-dok',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010731 => 
  [
    'name' => 'Gorilla Man',
    'description' => '',
    'series' => 
    [
      0 => 6807,
      1 => 10144,
      2 => 11378,
      3 => 9962,
    ],
    'img' => '.',
  ],
  1010732 => 
  [
    'name' => 'Master Chief',
    'description' => '',
    'series' => 
    [
      0 => 10749,
      1 => 2543,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/30/4ce5a2b669c3a.jpg',
  ],
  1010733 => 
  [
    'name' => 'Star-Lord (Peter Quill)',
    'description' => 'Refusing to miss his opportunity, Peter Jason Quill stole a scoutship from Cape Canaveral, returned to Eve, and shot his way to the appointed spot, where his old rival Harrelson, NASA\'s choice to be Star-Lord, was awaiting selection, where Quill was transported away in his stead, and transformed into Star-Lord.',
    'series' => 
    [
      0 => 16449,
      1 => 6056,
      2 => 3061,
      3 => 2541,
      4 => 16410,
      5 => 19044,
      6 => 2045,
      7 => 3718,
      8 => 2046,
      9 => 1595,
      10 => 14615,
      11 => 9950,
    ],
    'img' => '.',
  ],
  1010734 => 
  [
    'name' => 'Peter Quill',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010735 => 
  [
    'name' => 'Drax',
    'description' => '',
    'series' => 
    [
      0 => 3613,
      1 => 912,
      2 => 16410,
      3 => 2983,
      4 => 12850,
      5 => 6686,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/d0/526032deabbff.jpg',
  ],
  1010736 => 
  [
    'name' => 'Jack Flag',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/50/4c003787cd7e1.jpg',
  ],
  1010737 => 
  [
    'name' => 'Wraith',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 3061,
      2 => 2532,
    ],
    'img' => false,
  ],
  1010738 => 
  [
    'name' => 'X-Factor',
    'description' => '',
    'series' => 
    [
      0 => 9864,
      1 => 10105,
      2 => 14400,
      3 => 14388,
      4 => 2446,
      5 => 3719,
      6 => 1035,
      7 => 2098,
      8 => 6689,
      9 => 9313,
      10 => 1581,
      11 => 1915,
      12 => 5068,
      13 => 10581,
      14 => 15266,
      15 => 2930,
      16 => 15337,
      17 => 14428,
      18 => 1882,
      19 => 3633,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/03/5274136b4372f.jpg',
  ],
  1010739 => 
  [
    'name' => 'X-Factor Investigations',
    'description' => '',
    'series' => 
    [
      0 => 1035,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/80/528d35f020202.jpg',
  ],
  1010740 => 
  [
    'name' => 'Winter Soldier',
    'description' => '',
    'series' => 
    [
      0 => 6807,
      1 => 2114,
      2 => 9865,
      3 => 454,
      4 => 9085,
      5 => 13032,
      6 => 4864,
      7 => 13194,
      8 => 9706,
      9 => 2722,
      10 => 1996,
      11 => 832,
      12 => 12105,
      13 => 1459,
      14 => 1998,
      15 => 7222,
      16 => 13199,
      17 => 3752,
      18 => 13844,
      19 => 9869,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/03/5265478293c1e.jpg',
  ],
  1010741 => 
  [
    'name' => 'Phyla-Vell',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010742 => 
  [
    'name' => 'Wendell Vaughn',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/80/4c003744919ef.jpg',
  ],
  1010743 => 
  [
    'name' => 'Groot',
    'description' => '',
    'series' => 
    [
      0 => 2541,
      1 => 13025,
      2 => 14818,
      3 => 16410,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/10/526033c8b474a.jpg',
  ],
  1010744 => 
  [
    'name' => 'Rocket Raccoon',
    'description' => 'A genetically-engineered alien with a knack for big guns and fast ships, Rocket serves as the backbone of the Guardians of the Galaxy!',
    'series' => 
    [
      0 => 6056,
      1 => 3061,
      2 => 2541,
      3 => 13025,
      4 => 14818,
      5 => 16410,
      6 => 18806,
      7 => 6257,
      8 => 14615,
      9 => 9950,
    ],
    'img' => '.',
  ],
  1010745 => 
  [
    'name' => 'Sister Grimm',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/b0/4c00377e2a541.jpg',
  ],
  1010746 => 
  [
    'name' => 'Nico Minoru',
    'description' => '',
    'series' => 
    [
      0 => 843,
      1 => 5338,
      2 => 1445,
      3 => 1631,
    ],
    'img' => '.',
  ],
  1010747 => 
  [
    'name' => 'Runaways',
    'description' => 'The teens who became the Runaways found that some family secrets are bigger than others when they witnessed their parents, part of a cabal known as the Pride, murdering a young girl during a secret sacrificial ritual. ',
    'series' => 
    [
      0 => 9086,
      1 => 1114,
      2 => 1908,
      3 => 843,
      4 => 2584,
      5 => 5338,
      6 => 327,
      7 => 1228,
      8 => 1428,
      9 => 1445,
      10 => 1604,
      11 => 1631,
      12 => 1903,
      13 => 14077,
      14 => 14075,
      15 => 14053,
      16 => 14055,
      17 => 14049,
      18 => 14048,
    ],
    'img' => '.',
  ],
  1010748 => 
  [
    'name' => 'Arsenic',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/c0/4c00359a2be7b.jpg',
  ],
  1010749 => 
  [
    'name' => 'Gertrude Yorkes',
    'description' => '',
    'series' => 
    [
      0 => 843,
      1 => 1445,
      2 => 1631,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/c0/4c00359a2be7b.jpg',
  ],
  1010750 => 
  [
    'name' => 'Princess Powerful',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/60/4c0037783e8b3.jpg',
  ],
  1010751 => 
  [
    'name' => 'Lucy in the Sky',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/50/4c00377435871.jpg',
  ],
  1010752 => 
  [
    'name' => 'Karolina Dean ',
    'description' => '',
    'series' => 
    [
      0 => 5338,
      1 => 843,
      2 => 1445,
      3 => 1631,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/50/4c00377435871.jpg',
  ],
  1010753 => 
  [
    'name' => 'Talkback (Chase Stein)',
    'description' => 'Chase Stein is the son of mad scientists Victor and Janet Stein and is the tech genius of the Runaways.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010754 => 
  [
    'name' => 'Chase Stein',
    'description' => 'Chase Stein is the son of mad scientists Victor and Janet Stein and is the tech genius of the Runaways.',
    'series' => 
    [
      0 => 5338,
      1 => 843,
      2 => 1445,
      3 => 1631,
    ],
    'img' => '.',
  ],
  1010755 => 
  [
    'name' => 'Alex Wilder',
    'description' => 'Despite being the only one of the Runaways without any superhuman abilities or tech, Alex Wilder became the de facto leader of the group due to his natural leadership skills and intellect, as well as prodigy-level logic and strategy.',
    'series' => 
    [
      0 => 2584,
      1 => 327,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/c0/4c00377144d5a.jpg',
  ],
  1010756 => 
  [
    'name' => 'Champions',
    'description' => '',
    'series' => 
    [
      0 => 1565,
      1 => 2001,
      2 => 1720,
      3 => 1721,
      4 => 13853,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/b0/4c00376da82bb.jpg',
  ],
  1010757 => 
  [
    'name' => 'Omega Flight',
    'description' => '',
    'series' => 
    [
      0 => 1941,
      1 => 3109,
    ],
    'img' => false,
  ],
  1010758 => 
  [
    'name' => 'Illuminati',
    'description' => '',
    'series' => 
    [
      0 => 16451,
      1 => 4906,
      2 => 1137,
      3 => 3438,
      4 => 4619,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/70/526033bb40a5e.jpg',
  ],
  1010759 => 
  [
    'name' => 'Heroes For Hire',
    'description' => '',
    'series' => 
    [
      0 => 964,
      1 => 1626,
      2 => 1121,
      3 => 13330,
      4 => 1966,
      5 => 13558,
      6 => 2700,
      7 => 3282,
    ],
    'img' => '.',
  ],
  1010760 => 
  [
    'name' => 'Justice',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 9086,
      2 => 10037,
      3 => 1340,
      4 => 1496,
      5 => 1737,
      6 => 158,
      7 => 1945,
      8 => 98,
      9 => 12973,
      10 => 2572,
      11 => 2075,
      12 => 6688,
      13 => 3633,
    ],
    'img' => '.',
  ],
  1010761 => 
  [
    'name' => 'Sleepwalker',
    'description' => 'Sleepwalkers are guardians of the Mindscape -- they apprehended beings that invade the sleeping minds of humans.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/30/4c0037640501a.jpg',
  ],
  1010762 => 
  [
    'name' => 'Pip',
    'description' => '',
    'series' => 
    [
      0 => 6686,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/30/4ce5a30a8249e.jpg',
  ],
  1010763 => 
  [
    'name' => 'Gamora',
    'description' => '',
    'series' => 
    [
      0 => 16410,
      1 => 2504,
      2 => 13604,
      3 => 3654,
      4 => 6686,
    ],
    'img' => '.',
  ],
  1010764 => 
  [
    'name' => 'Stardust',
    'description' => 'As Herald for the world devourer, Galactus, Stardust found suitable worlds for her master to consume.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010765 => 
  [
    'name' => 'Werewolf By Night',
    'description' => 'Jack Russell inherited the curse of lycanthropy from his father, Gregor.',
    'series' => 
    [
      0 => 3741,
      1 => 3730,
      2 => 1505,
      3 => 9914,
      4 => 2039,
      5 => 1696,
      6 => 2045,
      7 => 3717,
      8 => 2073,
      9 => 5850,
      10 => 6687,
    ],
    'img' => '.',
  ],
  1010766 => 
  [
    'name' => 'Jack O\' Lantern',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010767 => 
  [
    'name' => 'Random',
    'description' => '',
    'series' => 
    [
      0 => 2098,
      1 => 6689,
      2 => 5068,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/c0/4c00375b36bd4.jpg',
  ],
  1010768 => 
  [
    'name' => 'Loners',
    'description' => '',
    'series' => 
    [
      0 => 1938,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/00/4c0037581a64e.jpg',
  ],
  1010769 => 
  [
    'name' => 'Rocket Racer',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/e0/4c0037551d8c2.jpg',
  ],
  1010770 => 
  [
    'name' => 'Power Pack',
    'description' => '',
    'series' => 
    [
      0 => 9994,
      1 => 9995,
      2 => 1748,
      3 => 1046,
      4 => 14389,
      5 => 14388,
      6 => 2506,
      7 => 3444,
      8 => 1869,
      9 => 2708,
      10 => 3077,
      11 => 3719,
      12 => 2301,
      13 => 864,
      14 => 13467,
      15 => 1467,
      16 => 1127,
      17 => 2235,
      18 => 5849,
      19 => 9731,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/40/528d338b532d2.jpg',
  ],
  1010771 => 
  [
    'name' => 'Excalibur',
    'description' => '',
    'series' => 
    [
      0 => 740,
      1 => 2011,
      2 => 1596,
      3 => 1768,
      4 => 1894,
      5 => 3098,
      6 => 4935,
      7 => 1294,
      8 => 1257,
      9 => 3736,
      10 => 1530,
      11 => 2039,
      12 => 935,
      13 => 1549,
      14 => 1897,
      15 => 3633,
      16 => 4919,
    ],
    'img' => '.',
  ],
  1010772 => 
  [
    'name' => 'Jule Carpenter',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010773 => 
  [
    'name' => 'Arachne',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 9898,
    ],
    'img' => '.',
  ],
  1010774 => 
  [
    'name' => 'Daily Bugle',
    'description' => '',
    'series' => 
    [
      0 => 2984,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/f0/4ce5a31605544.jpg',
  ],
  1010775 => 
  [
    'name' => 'James Buchanan Barnes',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010776 => 
  [
    'name' => 'Danny Rand',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/20/4c00374b1008a.jpg',
  ],
  1010777 => 
  [
    'name' => 'James Howlett',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/10/4c00374780cc6.jpg',
  ],
  1010778 => 
  [
    'name' => 'Quasar (Wendell Vaughn)',
    'description' => '',
    'series' => 
    [
      0 => 1081,
      1 => 13025,
      2 => 14818,
      3 => 1997,
      4 => 14615,
      5 => 13604,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/80/52741155a2994.jpg',
  ],
  1010779 => 
  [
    'name' => 'Pete Wisdom',
    'description' => 'Pete Wisdom is a former agent of the British intelligence agency Black Air, which was charged with the observation of, and interaction with, extranormal activity, and he was the agency\'s liaison with the British superhero group Excalibur, whom he eventually aided in exposing Black Air\'s subversive criminal activities.',
    'series' => 
    [
      0 => 935,
      1 => 1549,
      2 => 1897,
      3 => 3633,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/b0/4c003740c9027.png',
  ],
  1010780 => 
  [
    'name' => 'Zemo',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010781 => 
  [
    'name' => 'Roland Deschain',
    'description' => '',
    'series' => 
    [
      0 => 9885,
      1 => 10124,
      2 => 11046,
      3 => 2488,
      4 => 7701,
      5 => 3096,
    ],
    'img' => false,
  ],
  1010782 => 
  [
    'name' => 'Ben Urich',
    'description' => 'Ben Urich is a reporter for the Daily Bugle who has many ties to the city\'s superhero community.',
    'series' => 
    [
      0 => 672,
      1 => 13383,
      2 => 454,
      3 => 2984,
      4 => 449,
      5 => 20,
      6 => 1866,
      7 => 5381,
      8 => 6685,
    ],
    'img' => '.',
  ],
  1010783 => 
  [
    'name' => 'Kat Farrell',
    'description' => '',
    'series' => 
    [
      0 => 1866,
      1 => 5381,
      2 => 753,
      3 => 1446,
    ],
    'img' => false,
  ],
  1010784 => 
  [
    'name' => 'Ares',
    'description' => '',
    'series' => 
    [
      0 => 7524,
      1 => 6079,
      2 => 454,
      3 => 983,
      4 => 1648,
      5 => 1991,
      6 => 354,
      7 => 4864,
      8 => 98,
      9 => 13259,
      10 => 3762,
      11 => 1866,
      12 => 5381,
      13 => 4619,
      14 => 6796,
      15 => 2989,
      16 => 10469,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/10/535ff3daea603.jpg',
  ],
  1010785 => 
  [
    'name' => 'Echo',
    'description' => '',
    'series' => 
    [
      0 => 449,
      1 => 313,
      2 => 19,
      3 => 20,
      4 => 1866,
      5 => 10639,
      6 => 753,
      7 => 1446,
      8 => 367,
      9 => 4619,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/f0/4c00373a2629f.jpg',
  ],
  1010786 => 
  [
    'name' => 'Jack Murdock',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010787 => 
  [
    'name' => 'Eddie Brock',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/80/4de932f1a298a.jpg',
  ],
  1010788 => 
  [
    'name' => 'Venom (Mac Gargan)',
    'description' => 'One of Spider-Man\'s oldest enemies, Mac Gargan has recently abandoned his Scorpion suit and identity and bonded with the alien symbiote that had previously been hosted by Peter Parker and Eddie Brock, becoming the new Venom.',
    'series' => 
    [
      0 => 454,
      1 => 1945,
      2 => 3097,
      3 => 997,
      4 => 1928,
      5 => 13259,
      6 => 1067,
      7 => 8842,
      8 => 18527,
      9 => 2945,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/50/531773a2ac20a.jpg',
  ],
  1010790 => 
  [
    'name' => 'Scorpion (Carmilla Black)',
    'description' => 'Carmilla Black is a genetically engineered human, created by Advanced Idea Mechanics (A.I.M.).',
    'series' => 
    [
      0 => 769,
      1 => 465,
      2 => 1450,
    ],
    'img' => '.',
  ],
  1010791 => 
  [
    'name' => 'Sub-Mariner',
    'description' => 'Prince Namor is the half-human/half-Atlantean ruler of Atlantis.',
    'series' => 
    [
      0 => 7534,
      1 => 2114,
      2 => 9865,
      3 => 354,
      4 => 1991,
      5 => 1340,
      6 => 1816,
      7 => 2111,
      8 => 93,
      9 => 158,
      10 => 1262,
      11 => 15305,
      12 => 4864,
      13 => 1537,
      14 => 6804,
      15 => 784,
      16 => 2226,
      17 => 1726,
      18 => 2722,
      19 => 832,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/b0/5245ef8c83126.jpg',
  ],
  1010792 => 
  [
    'name' => 'Robert Baldwin ',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010793 => 
  [
    'name' => 'Mattie Franklin',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010794 => 
  [
    'name' => 'Spider-Woman (Mattie Franklin)',
    'description' => 'Mattie Franklin was granted her powers when, after overhearing a phone call between her father and Norman Osborn about the Gathering of the Five, she took her father\'s place during the Gathering and was endowed with the awesome powers that Norman Osborn had wanted for himself.',
    'series' => 
    [
      0 => 454,
      1 => 1938,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/30/531771c2ab020.jpg',
  ],
  1010795 => 
  [
    'name' => 'Spider-Woman (Charlotte Witter)',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 6792,
      2 => 4864,
      3 => 832,
      4 => 5061,
      5 => 3127,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/60/531771afe4ffa.jpg',
  ],
  1010796 => 
  [
    'name' => 'Madame Web (Julia Carpenter)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/30/4c00373114b4b.jpg',
  ],
  1010797 => 
  [
    'name' => 'Nitro',
    'description' => '',
    'series' => 
    [
      0 => 2221,
      1 => 10105,
      2 => 632,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/f0/4c00372e0847c.jpg',
  ],
  1010798 => 
  [
    'name' => 'Colonel America',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010799 => 
  [
    'name' => 'Frightful Four',
    'description' => '',
    'series' => 
    [
      0 => 8842,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/a0/4c00372aafb39.jpg',
  ],
  1010801 => 
  [
    'name' => 'Ant-Man (Scott Lang)',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 1777,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/20/52696868356a0.jpg',
  ],
  1010802 => 
  [
    'name' => 'Ant-Man (Eric O\'Grady)',
    'description' => '',
    'series' => 
    [
      0 => 13082,
      1 => 13540,
      2 => 1945,
      3 => 14804,
      4 => 11872,
      5 => 977,
      6 => 2423,
      7 => 5202,
      8 => 13602,
      9 => 18681,
      10 => 9799,
      11 => 18527,
      12 => 14016,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/c0/53176aa9df48d.jpg',
  ],
  1010803 => 
  [
    'name' => 'Ultimates',
    'description' => '',
    'series' => 
    [
      0 => 334,
      1 => 12615,
      2 => 14423,
      3 => 10532,
      4 => 8509,
      5 => 1124,
      6 => 14313,
      7 => 664,
      8 => 709,
      9 => 1178,
      10 => 2422,
      11 => 1176,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/04/4dd2e7ded884f.jpg',
  ],
  1010804 => 
  [
    'name' => 'X-51',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/d0/4c003727804b4.jpg',
  ],
  1010805 => 
  [
    'name' => 'Machine Man',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1340,
      2 => 10144,
      3 => 378,
      4 => 1806,
      5 => 3374,
      6 => 2039,
      7 => 1542,
      8 => 10351,
      9 => 2059,
      10 => 2702,
      11 => 6688,
      12 => 5761,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/d0/4c003727804b4.jpg',
  ],
  1010806 => 
  [
    'name' => 'X-Statix',
    'description' => '',
    'series' => 
    [
      0 => 462,
      1 => 1017,
      2 => 1670,
      3 => 226,
      4 => 321,
      5 => 3320,
      6 => 153,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/40/4c003724ba21f.jpg',
  ],
  1010807 => 
  [
    'name' => 'Eternals',
    'description' => '',
    'series' => 
    [
      0 => 1911,
      1 => 2017,
      2 => 1058,
      3 => 5857,
      4 => 1770,
      5 => 5053,
      6 => 1973,
      7 => 2095,
      8 => 3314,
      9 => 6446,
      10 => 2100,
    ],
    'img' => '.',
  ],
  1010808 => 
  [
    'name' => 'Hawkeye (Kate Bishop)',
    'description' => '',
    'series' => 
    [
      0 => 13447,
      1 => 1067,
      2 => 1866,
      3 => 9765,
      4 => 756,
      5 => 1661,
      6 => 1250,
      7 => 1955,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/10/537bad9caa831.jpg',
  ],
  1010809 => 
  [
    'name' => 'Clint Barton',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010810 => 
  [
    'name' => 'Kate Bishop',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/60/4c0035f5b8c95.jpg',
  ],
  1010811 => 
  [
    'name' => 'Man-Wolf',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 454,
      2 => 2984,
      3 => 1996,
      4 => 378,
      5 => 1806,
      6 => 1389,
      7 => 2045,
    ],
    'img' => '.',
  ],
  1010812 => 
  [
    'name' => 'John Jameson',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/90/4c7c641e86d14.jpg',
  ],
  1010813 => 
  [
    'name' => 'Celestials',
    'description' => '',
    'series' => 
    [
      0 => 378,
      1 => 1806,
      2 => 6043,
      3 => 8821,
      4 => 2083,
      5 => 12847,
      6 => 14914,
      7 => 2095,
      8 => 3314,
      9 => 6688,
      10 => 2100,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/f0/4c0035efbf930.jpg',
  ],
  1010814 => 
  [
    'name' => 'Squadron Supreme (Earth-712)',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 1996,
      2 => 6682,
      3 => 1160,
      4 => 944,
      5 => 2074,
      6 => 5208,
      7 => 219,
      8 => 1791,
      9 => 2554,
      10 => 1136,
      11 => 1124,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/a0/4c0035eca1466.jpg',
  ],
  1010815 => 
  [
    'name' => 'New Goblin',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010816 => 
  [
    'name' => 'Hate-Monger (Adolf Hitler)',
    'description' => '',
    'series' => 
    [
      0 => 8854,
      1 => 3674,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/50/4c0035ea3151e.jpg',
  ],
  1010817 => 
  [
    'name' => 'Rage',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1340,
      2 => 1496,
      3 => 1945,
      4 => 3097,
      5 => 4924,
      6 => 3633,
    ],
    'img' => '.',
  ],
  1010818 => 
  [
    'name' => 'Komodo (Melati Kusuma)',
    'description' => '',
    'series' => 
    [
      0 => 1945,
      1 => 13855,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/30/535ff55a6d8f6.jpg',
  ],
  1010819 => 
  [
    'name' => 'Texas Twister',
    'description' => '',
    'series' => 
    [
      0 => 2301,
      1 => 6682,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/d0/4c0035e44d390.jpg',
  ],
  1010820 => 
  [
    'name' => 'Thor Girl',
    'description' => 'Tarene, aware of her true nature as the Designate, a being foretold to elevate all life to greatness, sought adventure and, using Thor as a template, transformed herself into an Asgardian goddess and journeyed to Earth.',
    'series' => 
    [
      0 => 1945,
      1 => 13855,
      2 => 581,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/e0/526957cdcf6d1.jpg',
  ],
  1010821 => 
  [
    'name' => 'Hardball',
    'description' => '',
    'series' => 
    [
      0 => 1945,
      1 => 3087,
      2 => 13855,
      3 => 4619,
    ],
    'img' => '.',
  ],
  1010822 => 
  [
    'name' => 'Trauma',
    'description' => 'Terrance Ward was drafted into the Initiative training program because of his telepathic and shape-shifting abilities.',
    'series' => 
    [
      0 => 1945,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/00/528d367cdee38.jpg',
  ],
  1010823 => 
  [
    'name' => 'Cloud 9',
    'description' => '',
    'series' => 
    [
      0 => 10235,
      1 => 1945,
      2 => 13855,
    ],
    'img' => '.',
  ],
  1010824 => 
  [
    'name' => 'Shooting Star',
    'description' => '',
    'series' => 
    [
      0 => 2550,
      1 => 2039,
    ],
    'img' => false,
  ],
  1010825 => 
  [
    'name' => 'Triathlon',
    'description' => 'After being exposed as a steroid user and stripped of his awards, gifted sprinter Delroy Garrett Jr. sought new direction in the Triune Understanding, a philosophical movement that preaches the fulfillment of one\'s innate potential by balancing various aspects of environment and self, after which he developed a superhuman triple-powered physique, and, believing the Triune teachings had unlocked his latent powers, Garrett became the costumed hero Triathlon and celebrity spokesman for the Triune Understanding.',
    'series' => 
    [
      0 => 354,
      1 => 1340,
      2 => 1496,
      3 => 1737,
      4 => 1816,
      5 => 2929,
      6 => 158,
      7 => 98,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/b0/4c7c64195cbb9.jpg',
  ],
  1010826 => 
  [
    'name' => 'MVP',
    'description' => '',
    'series' => 
    [
      0 => 1945,
      1 => 3087,
      2 => 4619,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/50/4ce5a36f31b94.jpg',
  ],
  1010827 => 
  [
    'name' => 'Armory',
    'description' => '',
    'series' => 
    [
      0 => 3087,
      1 => 4619,
    ],
    'img' => false,
  ],
  1010828 => 
  [
    'name' => 'Stature',
    'description' => 'Cassie Lang is the daughter of deceased Avenger Scott Lang and a member of the Young Avengers.',
    'series' => 
    [
      0 => 13447,
      1 => 1908,
      2 => 1114,
      3 => 8842,
      4 => 1866,
      5 => 18527,
      6 => 756,
      7 => 1250,
      8 => 1661,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/60/527413be6077d.jpg',
  ],
  1010829 => 
  [
    'name' => 'Bengal',
    'description' => '',
    'series' => 
    [
      0 => 1945,
      1 => 2576,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/70/5269523ee6c03.jpg',
  ],
  1010830 => 
  [
    'name' => 'Blazing Skull',
    'description' => '',
    'series' => 
    [
      0 => 729,
      1 => 1241,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/d0/4ce5a37a830a3.jpg',
  ],
  1010831 => 
  [
    'name' => 'Network',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010832 => 
  [
    'name' => 'Gargoyle',
    'description' => '',
    'series' => 
    [
      0 => 13330,
      1 => 3719,
      2 => 10497,
    ],
    'img' => '.',
  ],
  1010833 => 
  [
    'name' => 'Speed',
    'description' => 'Tommy Shepherd may be the son of the Scarlet Witch and the Vision, and thus the twin brother of Wiccan.',
    'series' => 
    [
      0 => 13447,
      1 => 1866,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/10/4c0035d87180e.jpg',
  ],
  1010834 => 
  [
    'name' => 'Siren (Earth-93060)',
    'description' => 'Jennifer Pearson appeared on the Ultra hero scene as Siren after being held hostage by her fathers foe known as Mannequin.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010835 => 
  [
    'name' => 'Asylum',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010836 => 
  [
    'name' => 'Alex Power',
    'description' => '',
    'series' => 
    [
      0 => 454,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/50/4ce5a385a2e82.jpg',
  ],
  1010837 => 
  [
    'name' => 'Red Wolf',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 3741,
      2 => 2039,
      3 => 3717,
      4 => 2301,
      5 => 2988,
      6 => 7057,
      7 => 1910,
    ],
    'img' => false,
  ],
  1010838 => 
  [
    'name' => 'Rattler',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010839 => 
  [
    'name' => 'Hindsight Lad',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/30/4c0035d60033c.jpg',
  ],
  1010840 => 
  [
    'name' => 'Mr. Immortal',
    'description' => '',
    'series' => 
    [
      0 => 2005,
      1 => 823,
      2 => 1375,
    ],
    'img' => '.',
  ],
  1010841 => 
  [
    'name' => 'Zaran',
    'description' => '',
    'series' => 
    [
      0 => 1996,
      1 => 2576,
    ],
    'img' => false,
  ],
  1010842 => 
  [
    'name' => 'King Cobra',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010843 => 
  [
    'name' => 'Big Bertha',
    'description' => '',
    'series' => 
    [
      0 => 2005,
      1 => 823,
      2 => 1375,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/d0/4c0035cfca8b6.jpg',
  ],
  1010844 => 
  [
    'name' => 'Ironclad',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/90/4c0035ccf2128.jpg',
  ],
  1010845 => 
  [
    'name' => 'Smiling Tiger',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010846 => 
  [
    'name' => 'Aegis (Trey Rollins)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/e0/4c0035c9c425d.gif',
  ],
  1010847 => 
  [
    'name' => 'Ultragirl (Earth-93060)',
    'description' => '',
    'series' => 
    [
      0 => 1945,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/30/5269579e423ed.jpg',
  ],
  1010848 => 
  [
    'name' => 'Silhouette',
    'description' => 'Silhouette Chord is a descendant of the Dragon\'s Breadth cult, which spent centuries trying to master the Well of All Things, a hidden interdimensional mystic energy breach in Cambodia.',
    'series' => 
    [
      0 => 6689,
      1 => 3633,
    ],
    'img' => false,
  ],
  1010849 => 
  [
    'name' => 'Wallflower',
    'description' => 'Laurie Collins began to involuntarily manipulate anyone around her once her genetic mutation manifested, unable to control its effects.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010850 => 
  [
    'name' => 'Bloodstrike',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010851 => 
  [
    'name' => 'Mach IV',
    'description' => '',
    'series' => 
    [
      0 => 788,
      1 => 1514,
      2 => 18527,
    ],
    'img' => false,
  ],
  1010852 => 
  [
    'name' => 'Two-Gun Kid',
    'description' => '',
    'series' => 
    [
      0 => 2039,
      1 => 3719,
      2 => 127,
      3 => 2988,
      4 => 14643,
      5 => 3662,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/70/4ce5a390b929b.jpg',
  ],
  1010853 => 
  [
    'name' => 'White Tiger (Angela Del Toro)',
    'description' => 'Federal agent Angela Del Toro is the heir to a heroic legacy that began with the Jade Tiger, a long-lost enchanted statue from the fabled kingdom of K\'un-Lun, and had been last held by her uncle, Hector Ayala, who fought alongside such heroes as Daredevil and Spider-Man.',
    'series' => 
    [
      0 => 553,
      1 => 2271,
      2 => 1979,
      3 => 1099,
      4 => 2697,
    ],
    'img' => '.',
  ],
  1010854 => 
  [
    'name' => 'Living Lightning',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1340,
      2 => 1737,
      3 => 1816,
      4 => 3624,
      5 => 98,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/a0/4c0035c72cc26.jpg',
  ],
  1010855 => 
  [
    'name' => 'Solo (James Bourne)',
    'description' => 'James Bourne was drafted to a top-secret special forces operation where he endured ten months of hard and brutal training to earn his place in the new counter-terrorist group Omega Strike.',
    'series' => 
    [
      0 => 2039,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/f0/4c7c641408c12.jpg',
  ],
  1010856 => 
  [
    'name' => 'Silk Fever',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010857 => 
  [
    'name' => 'Timeslip',
    'description' => 'As a young child, Rina Patel experienced visions of her future, though she eventually learned to control this, triggering visions of specific times, and she realized she was swapping her consciousness across time.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010858 => 
  [
    'name' => 'Shockwave',
    'description' => 'Lancaster Sneed was a secret agent working for the United Kingdom’s MI:6, but no one esteemed him as highly as himself, and despite his pride, he was wounded in an explosion on his first field assignment and forced to undergo a radical surgery that grafted metal plates and cybernetic systems to his body.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/c0/4c0035c193fc3.jpg',
  ],
  1010859 => 
  [
    'name' => 'Black Crow',
    'description' => '',
    'series' => 
    [
      0 => 3741,
    ],
    'img' => false,
  ],
  1010860 => 
  [
    'name' => 'Squirrel Girl',
    'description' => 'Escaping the taunts of her fellow school students regarding her physical mutation, Los-Angeles born Doreen Green fled into the nearby woods where she quickly discovered her affinity for squirrels.',
    'series' => 
    [
      0 => 10235,
      1 => 454,
      2 => 823,
      3 => 1375,
      4 => 9922,
      5 => 13315,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/60/4c0035beb0c55.jpg',
  ],
  1010861 => 
  [
    'name' => 'Scarecrow (Ebenezer Laughton)',
    'description' => 'Realizing the criminal potential of his abilities, Umberto stole a flock of trained birds from a fellow performer to assist him in his new costumed criminal guise as the Scarecrow.',
    'series' => 
    [
      0 => 354,
      1 => 227,
      2 => 271,
      3 => 3898,
      4 => 3741,
      5 => 2961,
      6 => 3717,
      7 => 722,
      8 => 2725,
    ],
    'img' => false,
  ],
  1010862 => 
  [
    'name' => 'Unicorn',
    'description' => 'Milos Masaryk, a Soviet intelligence agent assigned as a security guard for Anton Vanko, a Soviet inventor who developed the Crimson Dynamo armor, was tasked by the Soviet government to retrieve Vanko after he defected to the United States.',
    'series' => 
    [
      0 => 2029,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/40/4c0035bc1dcf1.jpg',
  ],
  1010863 => 
  [
    'name' => 'Flatman',
    'description' => '',
    'series' => 
    [
      0 => 2005,
      1 => 823,
      2 => 1375,
    ],
    'img' => '.',
  ],
  1010864 => 
  [
    'name' => 'Silverclaw',
    'description' => 'When her father died, Lupe was taken in by the Church orphanage, despite their misgivings about her “ungodly” powers.',
    'series' => 
    [
      0 => 354,
      1 => 1340,
      2 => 1737,
      3 => 1816,
      4 => 98,
    ],
    'img' => '.',
  ],
  1010865 => 
  [
    'name' => 'Puff Adder',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/c0/4c0035b602a0a.jpg',
  ],
  1010866 => 
  [
    'name' => 'Aqueduct',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/50/4c0035b3630cd.jpg',
  ],
  1010867 => 
  [
    'name' => 'Magdalene',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1340,
    ],
    'img' => false,
  ],
  1010868 => 
  [
    'name' => 'Firebird',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1340,
      2 => 1496,
      3 => 1737,
      4 => 1816,
      5 => 2929,
      6 => 3624,
      7 => 98,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/30/4c0035b0a7de0.jpg',
  ],
  1010869 => 
  [
    'name' => 'Masked Marvel (Unrevealed)',
    'description' => '',
    'series' => 
    [
      0 => 1909,
      1 => 2318,
    ],
    'img' => '.',
  ],
  1010870 => 
  [
    'name' => 'Ajaxis',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/70/4c0035adc7d3a.jpg',
  ],
  1010871 => 
  [
    'name' => 'Micromax',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 98,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/a0/4c0035aac6564.jpg',
  ],
  1010872 => 
  [
    'name' => 'Vector',
    'description' => 'Simon Utrecht wanted superhuman powers in order to persue personal power and gain, and commissioned a project that would ultimately simulate the crash that gave the Fantastic Four their powers; he has remained with the U-Foes ever since.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/80/4c0035a7dd04d.jpg',
  ],
  1010873 => 
  [
    'name' => 'Paladin',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 13691,
      2 => 13330,
      3 => 2039,
      4 => 2045,
      5 => 14441,
      6 => 15283,
      7 => 15282,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/30/535ff3bef14c1.jpg',
  ],
  1010874 => 
  [
    'name' => 'Slyde',
    'description' => 'A scientist at Beemont Manufacturing, Jalome Beacher created a chemical that could be used to coat a surface and thereby eliminate all friction between it and any other object, which he used, after being downsized, to rob banks and his former employers.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/90/4c0035a51844b.jpg',
  ],
  1010875 => 
  [
    'name' => 'X-Ray (James Darnell)',
    'description' => 'James Darnell, along with his sister, was among the small group led by engineer Simon Utrecht to simulate the crash that gave the Fantastic Four their powers, and has remained with the U-Foes ever since.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/40/4c0035a250615.jpg',
  ],
  1010876 => 
  [
    'name' => 'Mongoose',
    'description' => '',
    'series' => 
    [
      0 => 2083,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/20/4c00359f53bde.jpg',
  ],
  1010877 => 
  [
    'name' => 'Mathemanic',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010878 => 
  [
    'name' => 'Janus, the Nega-Man',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010879 => 
  [
    'name' => 'Doorman',
    'description' => '',
    'series' => 
    [
      0 => 2005,
      1 => 823,
      2 => 1375,
    ],
    'img' => '.',
  ],
  1010880 => 
  [
    'name' => 'Fixer (Paul Norbert Ebersol)',
    'description' => '',
    'series' => 
    [
      0 => 832,
      1 => 18527,
    ],
    'img' => '.',
  ],
  1010881 => 
  [
    'name' => 'Blacklash',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010882 => 
  [
    'name' => 'Old Lace',
    'description' => '',
    'series' => 
    [
      0 => 2584,
      1 => 843,
      2 => 5338,
      3 => 327,
      4 => 1631,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/c0/4c00359a2be7b.jpg',
  ],
  1010883 => 
  [
    'name' => 'Wrecking Crew',
    'description' => '',
    'series' => 
    [
      0 => 3743,
      1 => 9316,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/60/528d35dc8db1d.jpg',
  ],
  1010884 => 
  [
    'name' => 'Wrecker',
    'description' => 'Dirk Garthwaite, the son of a construction worker and abusive father and husband, grew up filled with resentment and anger toward his father, who abandoned the family, and quickly turned to crime, in which he used a crowbar as a reminder of his father, destroying each place he robbed.',
    'series' => 
    [
      0 => 354,
      1 => 1496,
      2 => 13745,
    ],
    'img' => false,
  ],
  1010885 => 
  [
    'name' => 'Thunderball',
    'description' => 'Dr. Eliot Franklin was a genius-level physicist who was forced to turn to crime and helped form the Wrecking Crew alongside the Wrecker, Bulldozer and Piledriver.',
    'series' => 
    [
      0 => 354,
      1 => 1496,
      2 => 832,
    ],
    'img' => false,
  ],
  1010886 => 
  [
    'name' => 'Piledriver',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1496,
      2 => 832,
    ],
    'img' => '.',
  ],
  1010887 => 
  [
    'name' => 'Bulldozer',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1496,
      2 => 832,
    ],
    'img' => false,
  ],
  1010888 => 
  [
    'name' => 'Iron Fist (Orson Randall)',
    'description' => '',
    'series' => 
    [
      0 => 3065,
      1 => 1140,
      2 => 2943,
      3 => 3851,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/e0/53176e979cca2.jpg',
  ],
  1010889 => 
  [
    'name' => 'Steel Serpent (Davos)',
    'description' => '',
    'series' => 
    [
      0 => 1140,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/90/4ce5a3cacb3af.jpg',
  ],
  1010890 => 
  [
    'name' => 'Deathlok',
    'description' => '&nbsp;',
    'series' => 
    [
      0 => 9430,
      1 => 7721,
      2 => 2039,
      3 => 1697,
      4 => 3719,
      5 => 3717,
      6 => 3715,
      7 => 8852,
      8 => 19030,
      9 => 2059,
      10 => 2702,
      11 => 9976,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/7/10/526165a98dd8e.jpg',
  ],
  1010891 => 
  [
    'name' => 'Midnight (Earth-811)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010892 => 
  [
    'name' => 'Rawhide Kid',
    'description' => '',
    'series' => 
    [
      0 => 3719,
      1 => 1732,
      2 => 196,
      3 => 2988,
      4 => 3662,
    ],
    'img' => '.',
  ],
  1010893 => 
  [
    'name' => 'Kid Colt',
    'description' => '',
    'series' => 
    [
      0 => 7937,
      1 => 2988,
      2 => 3662,
    ],
    'img' => '.',
  ],
  1010894 => 
  [
    'name' => 'Millie the Model',
    'description' => '',
    'series' => 
    [
      0 => 3707,
      1 => 3705,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/00/4c003597aefd0.jpg',
  ],
  1010895 => 
  [
    'name' => 'Sharon Ventura',
    'description' => '',
    'series' => 
    [
      0 => 2535,
      1 => 3281,
    ],
    'img' => false,
  ],
  1010896 => 
  [
    'name' => 'Lyja',
    'description' => '',
    'series' => 
    [
      0 => 2535,
      1 => 3281,
      2 => 2983,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/40/4c003594c52e8.jpg',
  ],
  1010898 => 
  [
    'name' => 'Sin',
    'description' => '',
    'series' => 
    [
      0 => 15370,
      1 => 2722,
      2 => 832,
      3 => 13767,
      4 => 1804,
      5 => 1779,
      6 => 5061,
      7 => 3127,
      8 => 13691,
      9 => 13857,
      10 => 13858,
      11 => 13822,
      12 => 14804,
      13 => 13827,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/70/5269647684f61.jpg',
  ],
  1010899 => 
  [
    'name' => 'Spitfire',
    'description' => 'During World War II, Jacqueline Falsworth bravely served in Britain’s Home Guard.',
    'series' => 
    [
      0 => 4864,
      1 => 2722,
      2 => 832,
      3 => 1779,
      4 => 10262,
      5 => 11825,
      6 => 2039,
      7 => 9972,
      8 => 2075,
      9 => 1819,
    ],
    'img' => '.',
  ],
  1010900 => 
  [
    'name' => 'Mr. Fish',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010901 => 
  [
    'name' => 'Stephen Strange',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010902 => 
  [
    'name' => 'Mordo',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010903 => 
  [
    'name' => 'Abyss (Age of Apocalypse)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/80/4c00358ec7548.jpg',
  ],
  1010904 => 
  [
    'name' => 'Magus (Adam Warlock)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/f0/4c00358c0575c.jpg',
  ],
  1010905 => 
  [
    'name' => 'Amun',
    'description' => 'Amun is a ruthless teenage assassin, employed by the Sisterhood of the Wasp to serve under the mage Vincent after Araٌa interrupted the ritual to initiate the Wasp\'s new chosen one.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010906 => 
  [
    'name' => 'Baron Zemo (Helmut Zemo)',
    'description' => '',
    'series' => 
    [
      0 => 1996,
      1 => 832,
      2 => 13731,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/a0/4c0035890fb0a.jpg',
  ],
  1010907 => 
  [
    'name' => 'Dark Beast',
    'description' => '',
    'series' => 
    [
      0 => 9976,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/d0/52602f32efdab.jpg',
  ],
  1010908 => 
  [
    'name' => 'Beast (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 2311,
      1 => 1823,
      2 => 466,
      3 => 1618,
      4 => 3659,
      5 => 474,
      6 => 13887,
      7 => 1758,
      8 => 2719,
      9 => 1168,
      10 => 3296,
      11 => 216,
      12 => 210,
      13 => 80,
      14 => 81,
      15 => 82,
      16 => 243,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/d0/53176a9be110c.jpg',
  ],
  1010909 => 
  [
    'name' => 'Beast (Earth-311)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/a0/4c0035813dc4c.jpg',
  ],
  1010910 => 
  [
    'name' => 'Black Cat (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 8509,
      1 => 466,
      2 => 1425,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/80/4c00357da502e.jpg',
  ],
  1010911 => 
  [
    'name' => 'Black Widow (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 2311,
      1 => 1823,
      2 => 3659,
      3 => 474,
      4 => 1607,
      5 => 216,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/03/53176a690b261.jpg',
  ],
  1010912 => 
  [
    'name' => 'Callisto (Age of Apocalypse)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/c0/535feb96ee0fb.jpg',
  ],
  1010913 => 
  [
    'name' => 'Captain America (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 469,
      1 => 1173,
      2 => 261,
      3 => 1673,
      4 => 8498,
      5 => 8499,
      6 => 12615,
      7 => 13181,
      8 => 8509,
      9 => 13936,
      10 => 14807,
      11 => 1124,
      12 => 466,
      13 => 1383,
      14 => 3659,
      15 => 474,
      16 => 1607,
      17 => 216,
      18 => 210,
      19 => 243,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/80/53176a0bb810c.jpg',
  ],
  1010914 => 
  [
    'name' => 'Captain America (House of M)',
    'description' => '',
    'series' => 
    [
      0 => 832,
      1 => 1613,
      2 => 1614,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/10/53176a1e7c0d5.jpg',
  ],
  1010915 => 
  [
    'name' => 'Captain Britain (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/a0/4c003574e99fb.jpg',
  ],
  1010916 => 
  [
    'name' => 'Carnage (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 466,
      1 => 2692,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/00/4c003571c756c.jpg',
  ],
  1010917 => 
  [
    'name' => 'Colossus (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 15087,
      1 => 3659,
      2 => 474,
      3 => 1758,
      4 => 2719,
      5 => 1408,
      6 => 1168,
      7 => 3296,
      8 => 216,
      9 => 210,
      10 => 80,
      11 => 81,
      12 => 82,
      13 => 243,
    ],
    'img' => false,
  ],
  1010918 => 
  [
    'name' => 'Cyclops (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 2311,
      1 => 1823,
      2 => 466,
      3 => 1618,
      4 => 474,
      5 => 13887,
      6 => 1758,
      7 => 2719,
      8 => 1607,
      9 => 1662,
      10 => 1168,
      11 => 3296,
      12 => 210,
      13 => 80,
      14 => 81,
      15 => 82,
      16 => 243,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/80/53176b8fe1dfa.jpg',
  ],
  1010919 => 
  [
    'name' => 'Daredevil (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 73,
      1 => 2298,
      2 => 767,
      3 => 1278,
      4 => 2311,
      5 => 1823,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/a0/53176b9e705dc.jpg',
  ],
  1010920 => 
  [
    'name' => 'Dazzler (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/20/4c0034510900d.jpg',
  ],
  1010921 => 
  [
    'name' => 'Doctor Octopus (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 852,
      1 => 1954,
      2 => 466,
      3 => 2692,
      4 => 1165,
      5 => 77,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/50/4c00344e05ce0.jpg',
  ],
  1010922 => 
  [
    'name' => 'Electro (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 466,
      1 => 1919,
      2 => 1162,
      3 => 76,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/d0/4c0034491f280.jpg',
  ],
  1010923 => 
  [
    'name' => 'Elektra (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 73,
      1 => 2298,
      2 => 767,
      3 => 1278,
      4 => 466,
      5 => 1425,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/03/53176bc813157.jpg',
  ],
  1010924 => 
  [
    'name' => 'Miek',
    'description' => '',
    'series' => 
    [
      0 => 465,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/30/52740f71b50f5.jpg',
  ],
  1010925 => 
  [
    'name' => 'Ghost Rider (Daniel Ketch)',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 13691,
      2 => 1104,
      3 => 9934,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/50/535feaa671cc6.jpg',
  ],
  1010926 => 
  [
    'name' => 'Giant-Man (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 14531,
      1 => 709,
      2 => 2422,
      3 => 3188,
      4 => 7515,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/d0/4c00343fc70c8.jpg',
  ],
  1010927 => 
  [
    'name' => 'Goliath (Bill Foster)',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 784,
      2 => 1726,
      3 => 1067,
      4 => 1109,
      5 => 13315,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/f0/4c00343d177d6.jpg',
  ],
  1010928 => 
  [
    'name' => 'Green Goblin (Harry Osborn)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010929 => 
  [
    'name' => 'Green Goblin (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 466,
      1 => 3854,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/c0/4c003439f081b.jpg',
  ],
  1010930 => 
  [
    'name' => 'Hobgoblin (Jason Macendale)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010931 => 
  [
    'name' => 'Hobgoblin (Robin Borne)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/40/4c00343625597.png',
  ],
  1010932 => 
  [
    'name' => 'Human Torch (Jim Hammond)',
    'description' => '',
    'series' => 
    [
      0 => 12105,
      1 => 3726,
      2 => 2567,
      3 => 5255,
      4 => 10262,
      5 => 11825,
      6 => 2038,
      7 => 288,
      8 => 2048,
      9 => 1159,
      10 => 304,
      11 => 52,
      12 => 9799,
      13 => 8395,
      14 => 8184,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/70/53176bed3fe4c.jpg',
  ],
  1010933 => 
  [
    'name' => 'Iceman (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 15087,
      1 => 466,
      2 => 5400,
      3 => 3659,
      4 => 474,
      5 => 13887,
      6 => 1758,
      7 => 2719,
      8 => 1168,
      9 => 3296,
      10 => 216,
      11 => 210,
      12 => 80,
      13 => 81,
      14 => 82,
      15 => 243,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/70/53176e6436aa6.jpg',
  ],
  1010934 => 
  [
    'name' => 'Invisible Woman (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 6647,
      1 => 9958,
      2 => 702,
      3 => 1415,
      4 => 1520,
      5 => 1660,
      6 => 1892,
      7 => 2433,
      8 => 2311,
      9 => 1823,
      10 => 1124,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/b0/4c00342d26fc5.jpg',
  ],
  1010935 => 
  [
    'name' => 'Iron Man (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 12615,
      1 => 8509,
      2 => 13936,
      3 => 3421,
      4 => 761,
      5 => 1275,
      6 => 2311,
      7 => 1823,
      8 => 1124,
      9 => 466,
      10 => 1383,
      11 => 474,
      12 => 1607,
      13 => 3188,
      14 => 7515,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/90/53176e7785d95.jpg',
  ],
  1010936 => 
  [
    'name' => 'Jubilee (Age of Apocalypse)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/03/53616326ca627.jpg',
  ],
  1010937 => 
  [
    'name' => 'Josiah X',
    'description' => '',
    'series' => 
    [
      0 => 553,
    ],
    'img' => false,
  ],
  1010938 => 
  [
    'name' => 'Joshua Kane',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/70/4c003423be2c7.jpg',
  ],
  1010939 => 
  [
    'name' => 'Lizard (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 2311,
      1 => 1823,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/60/4c0034207bd80.jpg',
  ],
  1010940 => 
  [
    'name' => 'Longshot (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/40/4c00341b3ec43.jpg',
  ],
  1010941 => 
  [
    'name' => 'Moira MacTaggert (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/d0/4c7c640312deb.jpg',
  ],
  1010942 => 
  [
    'name' => 'Magik (Amanda Sefton)',
    'description' => '',
    'series' => 
    [
      0 => 7455,
      1 => 749,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/b0/4c003414d6535.jpg',
  ],
  1010943 => 
  [
    'name' => 'Magneto (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 3659,
      1 => 474,
      2 => 13887,
      3 => 1758,
      4 => 2719,
      5 => 1607,
      6 => 1168,
      7 => 3296,
      8 => 216,
      9 => 210,
      10 => 80,
      11 => 82,
      12 => 243,
      13 => 3188,
      14 => 7515,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/60/53176fa65e0e3.jpg',
  ],
  1010944 => 
  [
    'name' => 'Magneto (Age of Apocalypse)',
    'description' => '',
    'series' => 
    [
      0 => 13896,
      1 => 9976,
      2 => 2101,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/70/53176f5026364.jpg',
  ],
  1010945 => 
  [
    'name' => 'Magneto (House of M)',
    'description' => '',
    'series' => 
    [
      0 => 832,
      1 => 1613,
      2 => 933,
      3 => 1614,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/60/53176f6222dd5.jpg',
  ],
  1010946 => 
  [
    'name' => 'Jean Grey (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 2311,
      1 => 1823,
      2 => 3659,
      3 => 474,
      4 => 13887,
      5 => 1758,
      6 => 2719,
      7 => 1662,
      8 => 1168,
      9 => 3296,
      10 => 216,
      11 => 210,
      12 => 80,
      13 => 81,
      14 => 82,
      15 => 243,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/b0/53176f424c100.jpg',
  ],
  1010947 => 
  [
    'name' => 'Maverick (Chris Bradley)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/60/4c7c63f89c100.jpg',
  ],
  1010948 => 
  [
    'name' => 'Mister Sinister (House of M)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/00/4c00340427a12.jpg',
  ],
  1010949 => 
  [
    'name' => 'Moon Knight (House of M)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010950 => 
  [
    'name' => 'Mr. Fantastic (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 6647,
      1 => 9958,
      2 => 13936,
      3 => 702,
      4 => 1415,
      5 => 1520,
      6 => 1660,
      7 => 1892,
      8 => 2433,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/d0/53176fc75a448.jpg',
  ],
  1010951 => 
  [
    'name' => 'Mysterio (Daniel Berkhart)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010952 => 
  [
    'name' => 'Mysterio (Francis Klum)',
    'description' => '',
    'series' => 
    [
      0 => 877,
      1 => 1895,
    ],
    'img' => false,
  ],
  1010953 => 
  [
    'name' => 'Mystique (Age of Apocalypse)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/03/528d33b473550.jpg',
  ],
  1010954 => 
  [
    'name' => 'Mystique (House of M)',
    'description' => '',
    'series' => 
    [
      0 => 632,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/70/4c0033fbbdb54.jpg',
  ],
  1010955 => 
  [
    'name' => 'Nomad (Steve Rogers)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010956 => 
  [
    'name' => 'Nova (Frankie Raye)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/f0/53176fd93dbc9.jpg',
  ],
  1010957 => 
  [
    'name' => 'Orphan-Maker',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/50/4c7c63f383bac.jpg',
  ],
  1010958 => 
  [
    'name' => 'Professor X (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 474,
      1 => 1519,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/70/51e82b7720a59.jpg',
  ],
  1010959 => 
  [
    'name' => 'Proteus (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 474,
      1 => 2719,
      2 => 1168,
      3 => 82,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/30/4c0033f0b31ed.jpg',
  ],
  1010960 => 
  [
    'name' => 'Proteus (House of M)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010961 => 
  [
    'name' => 'Prowler (Rick Lawson)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010962 => 
  [
    'name' => 'Puck (Zuzha Yu)',
    'description' => '',
    'series' => 
    [
      0 => 719,
      1 => 1335,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/60/4c0033edbce41.jpg',
  ],
  1010963 => 
  [
    'name' => 'Quicksilver (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 14807,
      1 => 3659,
      2 => 474,
      3 => 13887,
      4 => 1758,
      5 => 2719,
      6 => 3296,
      7 => 216,
      8 => 210,
      9 => 80,
      10 => 81,
      11 => 243,
      12 => 709,
      13 => 2422,
      14 => 3188,
      15 => 7515,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/03/53177007431ee.jpg',
  ],
  1010964 => 
  [
    'name' => 'Quicksilver (Age of Apocalypse)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/50/528d36e27d0ae.jpg',
  ],
  1010965 => 
  [
    'name' => 'Red Skull (Albert Malik)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010966 => 
  [
    'name' => 'Rogue (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 15087,
      1 => 3659,
      2 => 474,
      3 => 1758,
      4 => 216,
      5 => 81,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/a0/531771d5927db.jpg',
  ],
  1010967 => 
  [
    'name' => 'Rogue (Age of Apocalypse)',
    'description' => '',
    'series' => 
    [
      0 => 9976,
      1 => 348,
      2 => 1345,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/00/528d36d415498.jpg',
  ],
  1010968 => 
  [
    'name' => 'Sabretooth (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 8512,
      1 => 474,
      2 => 1758,
      3 => 210,
      4 => 81,
      5 => 243,
      6 => 3188,
      7 => 7515,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/c0/4c0033dfc318e.jpg',
  ],
  1010969 => 
  [
    'name' => 'Sabretooth (Age of Apocalypse)',
    'description' => '',
    'series' => 
    [
      0 => 479,
      1 => 1462,
      2 => 1563,
      3 => 2553,
      4 => 787,
      5 => 9976,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/90/5269580126d71.jpg',
  ],
  1010970 => 
  [
    'name' => 'Sabretooth (House of M)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/80/4c0033dd26d33.jpg',
  ],
  1010971 => 
  [
    'name' => 'Scarlet Witch (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 8509,
      1 => 13108,
      2 => 14807,
      3 => 1124,
      4 => 3659,
      5 => 474,
      6 => 13887,
      7 => 1758,
      8 => 2719,
      9 => 1607,
      10 => 3296,
      11 => 216,
      12 => 210,
      13 => 80,
      14 => 81,
      15 => 243,
      16 => 709,
      17 => 2422,
      18 => 3188,
      19 => 7515,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/03/53177154d219d.jpg',
  ],
  1010972 => 
  [
    'name' => 'Scarlet Witch (Age of Apocalypse)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/10/536408dbb7cca.jpg',
  ],
  1010973 => 
  [
    'name' => 'Shadow King (Age of Apocalypse)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/80/535feae2ecfc6.jpg',
  ],
  1010974 => 
  [
    'name' => 'Shadowcat (Ultimate)',
    'description' => 'After fourteen-year-old Kitty Pryde\'s mutant powers emerged, causing terrifying incidents where she uncontrollably phased out of the family apartment in to moving traffic andsewers, her mother Theresa contacted Professor Xavier.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/00/4c0033d9d26de.jpg',
  ],
  1010975 => 
  [
    'name' => 'Shadowcat (Age of Apocalypse)',
    'description' => 'Katherine Pryde lived in the suburbs of Illinois and kept her mutant abilities a secret.',
    'series' => 
    [
      0 => 787,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/80/535feaf1a92ef.jpg',
  ],
  1010976 => 
  [
    'name' => 'Silver Samurai (Age of Apocalypse)',
    'description' => 'Silver Samurai was a mutant rebel in his homeland of Japan, where, alongside Sunfire, he stood as the last line of defense against the hordes of Apocalypse.',
    'series' => 
    [
      0 => 787,
      1 => 9976,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/20/535ff6c2ee685.jpg',
  ],
  1010977 => 
  [
    'name' => 'Lieutenant Marcus Stone',
    'description' => '',
    'series' => 
    [
      0 => 2083,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/30/4c0032b127cf1.jpg',
  ],
  1010978 => 
  [
    'name' => 'Storm (Ultimate)',
    'description' => 'Ororo Munroe was raised in Morocco, learning English from American films, and after her family was murdered she fled to America, stealing cars in Harlem before relocating to Texas.',
    'series' => 
    [
      0 => 2311,
      1 => 1823,
      2 => 3659,
      3 => 474,
      4 => 13887,
      5 => 1758,
      6 => 2719,
      7 => 1519,
      8 => 1168,
      9 => 3296,
      10 => 216,
      11 => 210,
      12 => 80,
      13 => 81,
      14 => 82,
      15 => 243,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/10/5317733a7ab7a.jpg',
  ],
  1010979 => 
  [
    'name' => 'Storm (Age of Apocalypse)',
    'description' => 'Calling herself the Windrider, Storm carved out a small area of Africa as her own and intended to keep it safe from the strife of the war between humans and mutants.',
    'series' => 
    [
      0 => 787,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/00/5317732bcc91a.jpg',
  ],
  1010980 => 
  [
    'name' => 'Franklin Storm',
    'description' => 'Franklin Storm was the father of Susan and Johnny Storm.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/e0/4c0032a9477bc.jpg',
  ],
  1010981 => 
  [
    'name' => 'Sunfire (Age of Apocalypse)',
    'description' => 'During the beginning of Apocalypse\'s rise, Magneto approached Japan\'s greatest heroes, Sunfire and the Silver Samurai, and asked them to work with him and the X-Men to stop Apocalypse.',
    'series' => 
    [
      0 => 9976,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/40/53629baa391c6.jpg',
  ],
  1010982 => 
  [
    'name' => 'Swordsman (Jaques Duquesne)',
    'description' => 'When Clint Barton came to the Carson Carnival of Traveling Wonders, the Swordsman became one of his mentors.',
    'series' => 
    [
      0 => 1991,
      1 => 13257,
    ],
    'img' => false,
  ],
  1010983 => 
  [
    'name' => 'Thing (Ultimate)',
    'description' => 'When the time came for Reed Richards to demonstrate his teleportation device, his old friend Ben Grimm was invited to observe, but the device malfunctioned and Ben woke up in Mexico City, transformed into a rocky, brutish Thing.',
    'series' => 
    [
      0 => 6647,
      1 => 9958,
      2 => 702,
      3 => 1272,
      4 => 1415,
      5 => 1520,
      6 => 1660,
      7 => 1892,
      8 => 2433,
      9 => 2311,
      10 => 1823,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/40/4c0032a542533.jpg',
  ],
  1010984 => 
  [
    'name' => 'Union Jack (Montgomery Falsworth)',
    'description' => 'During World War I, Lord Montgomery Falsworth was recruited by the British army to become one of the first public superhero champions: Union Jack.',
    'series' => 
    [
      0 => 2005,
      1 => 8877,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/10/4c0032a211f54.jpg',
  ],
  1010985 => 
  [
    'name' => 'Union Jack (Brian Falsworth)',
    'description' => 'Imprisoned in Germany during WWII, Brian Falsworth shared a cell with a German scientist who had tried to recreate the super-soldier serum, but didn\'t want it to fall into Nazi hands, so he gave his only sample to Brian, who gained enhanced strength, speed, stamina and reflexes.',
    'series' => 
    [
      0 => 4864,
      1 => 832,
      2 => 1779,
    ],
    'img' => false,
  ],
  1010986 => 
  [
    'name' => 'Unus (Ultimate)',
    'description' => 'Unus worked with the Brotherhood of Mutants and with Magneto directly, projecting Magneto\'s image to allow him to converse with Charles Xavier without a face-to-face meeting.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4c002e0305708.gif',
  ],
  1010987 => 
  [
    'name' => 'Unus (Age of Apocalypse)',
    'description' => 'Unus worked for Apocalypse and was sent into Old New York City to search for any remaining humans there and to kill them.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/c0/536165c7d94ae.jpg',
  ],
  1010988 => 
  [
    'name' => 'Unus (House of M)',
    'description' => 'Unus is an agent for the House of M royal family.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010989 => 
  [
    'name' => 'Vanisher (Age of Apocalypse)',
    'description' => 'Vanisher worked for Apocalypse.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010990 => 
  [
    'name' => 'Vulture (Blackie Drago)',
    'description' => 'Adrian Toomes, the Vulture, told his cellmate, Blackie Drago, the location of his Vulture costume.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/50/4c00329c0dc23.jpg',
  ],
  1010991 => 
  [
    'name' => 'War Machine (Parnell Jacobs)',
    'description' => 'Parnell Jacobs was a member of the U.S. Army who fought in Sin-Congese civil war in Asia alongside Jim Rhodes and who later encountered the discarded armor of Rhodes\' superhero alter-ego, War Machine, which Jacobs studied used for the basis of many arms designs.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/f0/535febf826de5.jpg',
  ],
  1010992 => 
  [
    'name' => 'Wasp (Ultimate)',
    'description' => 'Janet Van Dyne has the ability to shrink down to the size of an insect and has the insect-like properties of her namesake, the wasp.',
    'series' => 
    [
      0 => 469,
      1 => 1173,
      2 => 261,
      3 => 3659,
      4 => 216,
      5 => 709,
      6 => 2422,
      7 => 3188,
      8 => 7515,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/70/4c00329438aa0.jpg',
  ],
  1010993 => 
  [
    'name' => 'Mary Jane Watson (House of M)',
    'description' => 'Mary Jane Watson always wanted to be an actress, but all the roles seemed to go to mutants, until her former high school friend, and world famous performer, Peter Parker asked her to play his love interest in his newest movie, upon the release of which made her America\'s sweetheart and one of the only human movies stars able to launch her own solo projects.',
    'series' => 
    [
      0 => 454,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4c003291616a1.jpg',
  ],
  1010994 => 
  [
    'name' => 'Wild Child (Age of Apocalypse)',
    'description' => 'Kyle Gibney was one of the original volunteers for Beta Flight, Canada\'s attempt at building a super soldier program to secure their borders against the onslaught of Apocalypse and his Infinite soldiers.',
    'series' => 
    [
      0 => 9976,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/c0/528d36110a1b9.jpg',
  ],
  1010995 => 
  [
    'name' => 'Wolfsbane (Age of Apocalypse)',
    'description' => 'An only child, Rahne Sinclair\'s mutant powers emerged during the culling of Scotland by the Apocalypse\'s Horseman Mikhail when her parents attempted to hide her, but failed, and Rahne was discovered by Mikhail\'s hounds and brought before him alongside her parents whom Mikhail made Rahne beg for their lives, making her pledge allegiance to Apocalypse.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/20/528d3602d37e0.jpg',
  ],
  1010996 => 
  [
    'name' => 'Yellowjacket (Rita DeMara)',
    'description' => 'Rita DeMara, hoping to show off her talent of engineering, stole a copy of the Yellowjacket costume from the Avengers Mansion.',
    'series' => 
    [
      0 => 13527,
      1 => 13257,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/f0/5398a8a4b8ca9.jpg',
  ],
  1010997 => 
  [
    'name' => 'Dirk Anger',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1010998 => 
  [
    'name' => 'The Initiative',
    'description' => '',
    'series' => 
    [
      0 => 1945,
      1 => 3097,
      2 => 4924,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/90/52740ddd98c4b.jpg',
  ],
  1010999 => 
  [
    'name' => 'Edward "Ted" Forrester',
    'description' => '',
    'series' => 
    [
      0 => 2539,
      1 => 3892,
    ],
    'img' => false,
  ],
  1011000 => 
  [
    'name' => 'Ted Forrester',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011001 => 
  [
    'name' => 'Daken',
    'description' => '',
    'series' => 
    [
      0 => 10110,
      1 => 9368,
      2 => 7707,
      3 => 5701,
      4 => 8842,
      5 => 2473,
      6 => 2258,
      7 => 13126,
      8 => 9962,
      9 => 9367,
    ],
    'img' => '.',
  ],
  1011002 => 
  [
    'name' => 'Marvel Zombies',
    'description' => '',
    'series' => 
    [
      0 => 998,
      1 => 1787,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/40/4ce5a430d93fd.jpg',
  ],
  1011003 => 
  [
    'name' => 'Thaddeus Ross',
    'description' => '',
    'series' => 
    [
      0 => 3374,
    ],
    'img' => '.',
  ],
  1011004 => 
  [
    'name' => 'M.O.D.A.M.',
    'description' => '',
    'series' => 
    [
      0 => 1997,
    ],
    'img' => false,
  ],
  1011005 => 
  [
    'name' => 'Hulk (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 11272,
      1 => 13936,
      2 => 3421,
      3 => 2311,
      4 => 1823,
      5 => 3659,
      6 => 1022,
      7 => 216,
      8 => 709,
      9 => 1178,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/03/53176c06e3974.jpg',
  ],
  1011006 => 
  [
    'name' => 'Wolverine (Ultimate)',
    'description' => 'Decades after participating in military airdrops with Captain America during WWII, James Howlett was abducted and experimented upon by a covert government unit, who bonded unbreakable adamantium to his skeleton, implanted three claws in each arm, dubbed him Weapon X and supposedly programmed him to kill any human he came into contact with.',
    'series' => 
    [
      0 => 13108,
      1 => 466,
      2 => 1383,
      3 => 1022,
      4 => 474,
      5 => 13887,
      6 => 1758,
      7 => 2719,
      8 => 1519,
      9 => 2242,
      10 => 1168,
      11 => 3296,
      12 => 80,
      13 => 81,
      14 => 82,
      15 => 3188,
      16 => 7515,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/03/531773b76840c.jpg',
  ],
  1011007 => 
  [
    'name' => 'Nick Fury (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 18327,
      1 => 8499,
      2 => 12615,
      3 => 9958,
      4 => 14068,
      5 => 13936,
      6 => 14807,
      7 => 14061,
      8 => 2311,
      9 => 1823,
      10 => 466,
      11 => 78,
      12 => 3659,
      13 => 1022,
      14 => 474,
      15 => 1758,
      16 => 216,
      17 => 210,
      18 => 81,
      19 => 243,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/70/4c0032832d0de.jpg',
  ],
  1011008 => 
  [
    'name' => 'Morlocks',
    'description' => '',
    'series' => 
    [
      0 => 3633,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/90/537f6cfa0e8bd.jpg',
  ],
  1011009 => 
  [
    'name' => 'Wind Dancer',
    'description' => 'Given the codename Wind Dancer, Sofia Mantega stepped up to lead the New Mutants.',
    'series' => 
    [
      0 => 2409,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/20/4c0032802a24d.jpg',
  ],
  1011010 => 
  [
    'name' => 'Spider-Man (Ultimate)',
    'description' => 'Peter’s relatively normal life changed abruptly during a school trip to Osborn Industries, Inc, where the company had been working on a super soldier serum, the Oz Compound; a spider exposed to it escaped and bit Peter before it was destroyed.',
    'series' => 
    [
      0 => 1673,
      1 => 12615,
      2 => 14423,
      3 => 9958,
      4 => 10532,
      5 => 8509,
      6 => 13831,
      7 => 14807,
      8 => 2311,
      9 => 1823,
      10 => 1124,
      11 => 466,
      12 => 5105,
      13 => 1054,
      14 => 14744,
      15 => 1919,
      16 => 1220,
      17 => 1221,
      18 => 1383,
      19 => 1397,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/50/531771b4e8c60.jpg',
  ],
  1011011 => 
  [
    'name' => 'Vulcan (Gabriel Summers)',
    'description' => 'Vulcan is the third Summers brother and an Omega-level mutant who was thought long-dead by Professor X.',
    'series' => 
    [
      0 => 2258,
      1 => 2555,
      2 => 1545,
      3 => 345,
      4 => 4513,
      5 => 2837,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/80/528d3629c2a91.jpg',
  ],
  1011012 => 
  [
    'name' => 'Armadillo',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/40/4c0032754da02.jpg',
  ],
  1011013 => 
  [
    'name' => 'Fantastic Four (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 6647,
      1 => 9958,
      2 => 702,
      3 => 13885,
      4 => 1272,
      5 => 1415,
      6 => 1520,
      7 => 1660,
      8 => 1892,
      9 => 2433,
      10 => 2311,
      11 => 1823,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/b0/4c0032727c038.jpg',
  ],
  1011014 => 
  [
    'name' => 'Lady Mastermind',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/d0/4c00326f63d4c.jpg',
  ],
  1011015 => 
  [
    'name' => 'Changeling',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/b0/4c00326c980ac.jpg',
  ],
  1011016 => 
  [
    'name' => 'Darwin',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/60/4c003269b12a4.jpg',
  ],
  1011017 => 
  [
    'name' => 'Sway',
    'description' => 'Suzanne Chan saw her parents gunned down in front of her, though she remained unscathed due to her manifesting mutant ability to stop time.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/40/4c003266ccbab.jpg',
  ],
  1011018 => 
  [
    'name' => 'The Order',
    'description' => '',
    'series' => 
    [
      0 => 2537,
      1 => 3877,
    ],
    'img' => false,
  ],
  1011019 => 
  [
    'name' => 'Molecule Man',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/d0/528d33c2a72b2.jpg',
  ],
  1011020 => 
  [
    'name' => 'Darkhawk',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1340,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/a0/5269553f4bc6a.jpg',
  ],
  1011021 => 
  [
    'name' => 'Phalanx',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/03/527411987e35d.jpg',
  ],
  1011022 => 
  [
    'name' => 'Super-Adaptoid',
    'description' => 'The Super-Adaptoid was created by the organization known as A.I.M. using a piece of the Cosmic Cube.',
    'series' => 
    [
      0 => 3621,
      1 => 1813,
      2 => 2029,
      3 => 14485,
      4 => 14486,
      5 => 2725,
      6 => 2258,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/e0/4c00325af279c.jpg',
  ],
  1011023 => 
  [
    'name' => 'Defenders',
    'description' => '',
    'series' => 
    [
      0 => 2962,
      1 => 3743,
      2 => 728,
      3 => 14701,
      4 => 3290,
      5 => 15309,
      6 => 14059,
      7 => 3731,
      8 => 6676,
      9 => 5250,
      10 => 5249,
      11 => 1658,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/80/526031e9c785a.jpg',
  ],
  1011024 => 
  [
    'name' => 'Invaders',
    'description' => '',
    'series' => 
    [
      0 => 1262,
      1 => 4864,
      2 => 2014,
      3 => 730,
      4 => 3726,
      5 => 2028,
      6 => 2567,
      7 => 5255,
      8 => 2045,
      9 => 1241,
      10 => 2095,
      11 => 1442,
      12 => 15552,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/60/539b3c2fca079.jpg',
  ],
  1011025 => 
  [
    'name' => 'Thor (Ultimate)',
    'description' => 'He claims he is the legendary Norse thunder deity Thor, sent to Earth by his father Odin, but official records say he is Thorlief Golmen, who stole his scientist brother Gunnar Golmen\'s super-soldier technology after suffering a nervous breakdown.',
    'series' => 
    [
      0 => 334,
      1 => 469,
      2 => 1173,
      3 => 261,
      4 => 12615,
      5 => 8509,
      6 => 11272,
      7 => 13936,
      8 => 466,
      9 => 1383,
      10 => 3659,
      11 => 216,
      12 => 664,
      13 => 709,
      14 => 1178,
      15 => 2422,
      16 => 3188,
      17 => 7515,
      18 => 1176,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/80/5317738e6dc12.jpg',
  ],
  1011026 => 
  [
    'name' => 'Mantis',
    'description' => '',
    'series' => 
    [
      0 => 2541,
      1 => 3621,
      2 => 1991,
      3 => 1813,
      4 => 3632,
    ],
    'img' => '.',
  ],
  1011027 => 
  [
    'name' => 'Captain Universe',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 2541,
      2 => 939,
      3 => 1598,
      4 => 1565,
      5 => 2983,
      6 => 2039,
      7 => 3719,
      8 => 2046,
      9 => 9367,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/c0/4c00324c12ba2.jpg',
  ],
  1011028 => 
  [
    'name' => 'Owl',
    'description' => '',
    'series' => 
    [
      0 => 3716,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/40/4ce5a45d60e63.jpg',
  ],
  1011029 => 
  [
    'name' => 'Kulan Gath',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 1737,
    ],
    'img' => false,
  ],
  1011030 => 
  [
    'name' => 'Prodigy',
    'description' => '',
    'series' => 
    [
      0 => 1945,
      1 => 13855,
      2 => 749,
      3 => 2271,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/20/535feca6710cd.jpg',
  ],
  1011031 => 
  [
    'name' => 'Agent X (Nijo)',
    'description' => 'Originally a partner of the mind-altering assassin Black Swan, Nijo spied on Deadpool as part of the Swan\'s plan to exact revenge for Deadpool falsely taking credit for the Swan\'s assassination of the Four Winds crime family, which included Nijo\'s brother.',
    'series' => 
    [
      0 => 459,
      1 => 693,
      2 => 1338,
    ],
    'img' => false,
  ],
  1011032 => 
  [
    'name' => 'Speed Demon',
    'description' => 'James Saunders, a disgruntled chemist tired of his job with the Hudson Pharmaceutical Company of West Caldwell, New Jersey, was contacted by the Grandmaster and offered superhuman powers in exchange for joining a team that would compete on his behalf.',
    'series' => 
    [
      0 => 1991,
      1 => 788,
      2 => 1331,
      3 => 1514,
      4 => 1547,
      5 => 17554,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/90/4c0032463bef2.jpg',
  ],
  1011033 => 
  [
    'name' => 'Joystick',
    'description' => '',
    'series' => 
    [
      0 => 788,
      1 => 1331,
      2 => 1514,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/f0/4c0032437ece7.jpg',
  ],
  1011034 => 
  [
    'name' => 'Terror',
    'description' => 'In the distant past, Terror battled a green bear-like demon that threatened early mankind, sacrificing his own form to overcome it; he was then cursed to wear its decayed form but gained its power.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/80/4c0032410b8d8.jpg',
  ],
  1011035 => 
  [
    'name' => 'Satana',
    'description' => '',
    'series' => 
    [
      0 => 10144,
      1 => 1765,
      2 => 13330,
      3 => 2961,
      4 => 2412,
      5 => 2045,
      6 => 3718,
      7 => 18527,
      8 => 2089,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/a0/4ce5a46882aa9.jpg',
  ],
  1011036 => 
  [
    'name' => 'Living Mummy',
    'description' => '',
    'series' => 
    [
      0 => 1996,
      1 => 9914,
    ],
    'img' => false,
  ],
  1011037 => 
  [
    'name' => 'Deathcry',
    'description' => '',
    'series' => 
    [
      0 => 2541,
      1 => 13527,
      2 => 13257,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/d0/535ff379c7c1b.jpg',
  ],
  1011038 => 
  [
    'name' => 'Bug',
    'description' => '',
    'series' => 
    [
      0 => 6056,
      1 => 6667,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/30/4c00323e50dda.jpg',
  ],
  1011039 => 
  [
    'name' => 'Centennial',
    'description' => '',
    'series' => 
    [
      0 => 719,
      1 => 1335,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/80/4c00323b6ac57.jpg',
  ],
  1011040 => 
  [
    'name' => 'Dinah Soar',
    'description' => '',
    'series' => 
    [
      0 => 2005,
      1 => 823,
      2 => 1375,
    ],
    'img' => false,
  ],
  1011041 => 
  [
    'name' => 'Great Lakes Avengers',
    'description' => '',
    'series' => 
    [
      0 => 823,
      1 => 1375,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/70/4c0032387d022.jpg',
  ],
  1011042 => 
  [
    'name' => 'Tag',
    'description' => '',
    'series' => 
    [
      0 => 868,
    ],
    'img' => false,
  ],
  1011043 => 
  [
    'name' => 'Wither',
    'description' => 'When his genetic mutation manifested, Kevin Ford accidentally killed his father with his lethal and uncontrollable touch, after which he was recruited as a student at the Xavier Institute.',
    'series' => 
    [
      0 => 868,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/b0/4c003235e6f1d.jpg',
  ],
  1011044 => 
  [
    'name' => 'Hellions (Squad)',
    'description' => '',
    'series' => 
    [
      0 => 868,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/10/4c00323303deb.jpg',
  ],
  1011045 => 
  [
    'name' => 'Photon',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 354,
      2 => 1340,
      3 => 1496,
      4 => 1816,
      5 => 158,
      6 => 98,
      7 => 8842,
      8 => 788,
      9 => 1514,
      10 => 6679,
    ],
    'img' => false,
  ],
  1011046 => 
  [
    'name' => 'Hedge Knight',
    'description' => '',
    'series' => 
    [
      0 => 2717,
    ],
    'img' => false,
  ],
  1011047 => 
  [
    'name' => 'Turbo',
    'description' => 'As Turbo, young journalist Michiko Musashi is the latest in a line of heroes who have worn the turbine-powered flying armor.',
    'series' => 
    [
      0 => 2039,
      1 => 1938,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/00/4c00322ddea0c.jpg',
  ],
  1011048 => 
  [
    'name' => 'Scalphunter',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/10/4ce5a473b81b3.jpg',
  ],
  1011050 => 
  [
    'name' => 'D\'Ken Neramani',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011051 => 
  [
    'name' => 'Strong Guy',
    'description' => 'According to his own admission, Guido was a nerdy-looking kid in his early life, bullied by other children, but after he discovered his mutant ability at a young age, when he was struck by a school bus, no one bullied him again.',
    'series' => 
    [
      0 => 479,
      1 => 116,
      2 => 2983,
      3 => 1035,
      4 => 2098,
      5 => 2930,
      6 => 1882,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/10/4c00322a3173c.jpg',
  ],
  1011052 => 
  [
    'name' => 'Cardiac',
    'description' => '',
    'series' => 
    [
      0 => 2092,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/70/4c003117e0b75.jpg',
  ],
  1011053 => 
  [
    'name' => 'Maelstrom',
    'description' => '',
    'series' => 
    [
      0 => 10739,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/20/4c003114d6700.jpg',
  ],
  1011054 => 
  [
    'name' => 'Spider-Man (1602)',
    'description' => '',
    'series' => 
    [
      0 => 1987,
      1 => 479,
      2 => 2553,
      3 => 2070,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/03/5317713c9e746.jpg',
  ],
  1011055 => 
  [
    'name' => 'Gideon',
    'description' => '',
    'series' => 
    [
      0 => 6689,
      1 => 3633,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/20/4c00311236811.jpg',
  ],
  1011056 => 
  [
    'name' => 'Multiple Man',
    'description' => '',
    'series' => 
    [
      0 => 13588,
      1 => 1035,
      2 => 2098,
      3 => 6689,
      4 => 5068,
      5 => 3633,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/a0/4c00310e9dc27.jpg',
  ],
  1011057 => 
  [
    'name' => 'Slapstick',
    'description' => 'Steven Harmon\'s powers have been described as "all of the abilities of a Saturday morning cartoon character."',
    'series' => 
    [
      0 => 1945,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/a0/4c00310b887bc.jpg',
  ],
  1011058 => 
  [
    'name' => 'Kylun',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/b0/4c003108ee445.jpg',
  ],
  1011059 => 
  [
    'name' => 'Living Tribunal',
    'description' => '',
    'series' => 
    [
      0 => 886,
      1 => 1896,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/a0/4c0031062f91f.jpg',
  ],
  1011060 => 
  [
    'name' => 'Ego',
    'description' => '',
    'series' => 
    [
      0 => 9858,
      1 => 354,
      2 => 1816,
      3 => 14475,
    ],
    'img' => '.',
  ],
  1011061 => 
  [
    'name' => 'Eternity',
    'description' => '',
    'series' => 
    [
      0 => 2985,
      1 => 3741,
      2 => 6449,
      3 => 1866,
      4 => 3654,
      5 => 6686,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/90/4c0030fff0e3d.jpg',
  ],
  1011062 => 
  [
    'name' => 'Stranger',
    'description' => 'By his own account, the Stranger is a composite being possessing the combined strength and intellect of the billions of humanoid beings who once lived on the planet Gigantus, an ancient world in the Andromeda Galaxy whose size approached the limit at which a planet can exist before fissioning into a sun.',
    'series' => 
    [
      0 => 1991,
      1 => 1683,
      2 => 3297,
      3 => 2080,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/80/4c0030fd08ad6.jpg',
  ],
  1011063 => 
  [
    'name' => 'In-Betweener',
    'description' => '',
    'series' => 
    [
      0 => 354,
      1 => 158,
      2 => 14720,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/60/4c0030f999ecb.jpg',
  ],
  1011064 => 
  [
    'name' => 'Inertia',
    'description' => '',
    'series' => 
    [
      0 => 944,
      1 => 1791,
      2 => 1124,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/60/4c0030f6eab3d.jpg',
  ],
  1011065 => 
  [
    'name' => 'Epoch',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/50/4c0030f453da3.jpg',
  ],
  1011066 => 
  [
    'name' => 'Victor Mancha',
    'description' => '',
    'series' => 
    [
      0 => 5338,
      1 => 843,
      2 => 1631,
      3 => 1903,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/10/4c0030f13bcaf.jpg',
  ],
  1011067 => 
  [
    'name' => 'Wild Pack',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/50/4c0030ee76e95.jpg',
  ],
  1011068 => 
  [
    'name' => 'M (Monet St. Croix)',
    'description' => '',
    'series' => 
    [
      0 => 1035,
      1 => 2930,
      2 => 1882,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/80/4c0030eabc66f.jpg',
  ],
  1011069 => 
  [
    'name' => 'Harrier',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/30/4c0030e7aba3e.jpg',
  ],
  1011070 => 
  [
    'name' => 'Slayback',
    'description' => 'Ten years ago, Slayback was killed by Deadpool before returning from the dead to break into Department K, from which he stole the Weapon X Program files of Kane and Deadpool.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011071 => 
  [
    'name' => 'Demogoblin',
    'description' => 'Jason Macendale, the newest Hobgoblin was down on his luck and offered the demon N\'astirh his soul in exchange for power during the  Inferno crisis, turning him into the Demogoblin.',
    'series' => 
    [
      0 => 2039,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/80/535fedd611db9.jpg',
  ],
  1011072 => 
  [
    'name' => 'Edwin Jarvis',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 354,
      2 => 9085,
      3 => 1991,
      4 => 1340,
      5 => 1496,
      6 => 1737,
      7 => 1816,
      8 => 2929,
      9 => 158,
      10 => 98,
      11 => 1866,
      12 => 5381,
      13 => 753,
      14 => 1446,
      15 => 367,
      16 => 4619,
      17 => 2083,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/40/4c0030e231f6b.jpg',
  ],
  1011073 => 
  [
    'name' => 'Bloodaxe',
    'description' => '',
    'series' => 
    [
      0 => 2083,
    ],
    'img' => false,
  ],
  1011074 => 
  [
    'name' => 'Lilith',
    'description' => '',
    'series' => 
    [
      0 => 6670,
      1 => 3718,
      2 => 6058,
      3 => 6024,
      4 => 2089,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/e0/52740fe6287e4.jpg',
  ],
  1011075 => 
  [
    'name' => 'Swarm',
    'description' => 'Fritz von Meyer was once a Nazi scientist, the details of which remain unrevealed, although it is known he had access to looted gold from countless European capitals to fund his research.',
    'series' => 
    [
      0 => 722,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/50/4c0030df47ab2.jpg',
  ],
  1011076 => 
  [
    'name' => 'Grandmaster',
    'description' => '',
    'series' => 
    [
      0 => 18527,
      1 => 2427,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/10/4c0030dc410d6.jpg',
  ],
  1011077 => 
  [
    'name' => 'Ikaris',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/50/4c0030d8df78e.jpg',
  ],
  1011078 => 
  [
    'name' => 'Starjammers',
    'description' => '',
    'series' => 
    [
      0 => 14398,
      1 => 2011,
      2 => 2039,
      3 => 708,
      4 => 2258,
      5 => 2555,
    ],
    'img' => '.',
  ],
  1011079 => 
  [
    'name' => 'Scorpion (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 466,
      1 => 2692,
    ],
    'img' => false,
  ],
  1011080 => 
  [
    'name' => 'Korg',
    'description' => '',
    'series' => 
    [
      0 => 465,
      1 => 8842,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/70/5269581a55d0c.jpg',
  ],
  1011081 => 
  [
    'name' => 'Ka-Zar',
    'description' => '',
    'series' => 
    [
      0 => 2984,
      1 => 1997,
      2 => 2021,
      3 => 8842,
      4 => 12968,
      5 => 13316,
      6 => 9748,
      7 => 2039,
      8 => 5387,
      9 => 5386,
      10 => 1730,
      11 => 2247,
      12 => 2981,
      13 => 2300,
      14 => 13882,
      15 => 2095,
      16 => 3648,
    ],
    'img' => '.',
  ],
  1011082 => 
  [
    'name' => 'Elixir',
    'description' => '',
    'series' => 
    [
      0 => 4002,
      1 => 749,
      2 => 1667,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/d0/52740e1b4ad81.jpg',
  ],
  1011083 => 
  [
    'name' => 'The 198',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011084 => 
  [
    'name' => 'Starfox',
    'description' => 'The youngest son of Mentor and Sui-San, Eros had the natural ability to excite pleasure in others, but his power had no effect upon his mutant older brother, Thanos, who worshiped the cosmic embodiment of Death and led an army against Titan.',
    'series' => 
    [
      0 => 354,
      1 => 1340,
      2 => 1816,
      3 => 2039,
      4 => 1697,
      5 => 3654,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/70/4c0030cbcba98.jpg',
  ],
  1011085 => 
  [
    'name' => 'Major Mapleleaf',
    'description' => '',
    'series' => 
    [
      0 => 719,
      1 => 1335,
    ],
    'img' => false,
  ],
  1011086 => 
  [
    'name' => 'Nemesis',
    'description' => '',
    'series' => 
    [
      0 => 719,
      1 => 1335,
      2 => 9906,
    ],
    'img' => false,
  ],
  1011087 => 
  [
    'name' => 'Dead Girl',
    'description' => '',
    'series' => 
    [
      0 => 3633,
      1 => 88,
      2 => 462,
      3 => 1670,
      4 => 1017,
      5 => 226,
      6 => 153,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/20/4c0030c61eb15.jpg',
  ],
  1011088 => 
  [
    'name' => 'Morlun',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 1490,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/00/527411be42b48.jpg',
  ],
  1011089 => 
  [
    'name' => 'Imperfects',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011090 => 
  [
    'name' => 'Brother Voodoo',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011091 => 
  [
    'name' => 'Hannibal King',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011092 => 
  [
    'name' => 'Leech',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 6689,
    ],
    'img' => false,
  ],
  1011093 => 
  [
    'name' => 'Shi\'Ar',
    'description' => '',
    'series' => 
    [
      0 => 2258,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/00/53a1c0e5a1f00.jpg',
  ],
  1011094 => 
  [
    'name' => 'Xavin',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/a0/4ce5a49743462.jpg',
  ],
  1011095 => 
  [
    'name' => 'Captain Marvel (Monica Rambeau)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/00/4c0030bee8c86.jpg',
  ],
  1011096 => 
  [
    'name' => 'Captain Marvel (Genis-Vell)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011097 => 
  [
    'name' => 'Captain Marvel (Phyla-Vell)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/a0/4c0030bc4629e.jpg',
  ],
  1011098 => 
  [
    'name' => 'Genis-Vell',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011099 => 
  [
    'name' => 'Mentallo',
    'description' => '',
    'series' => 
    [
      0 => 744,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/c0/4c0030b9256c6.jpg',
  ],
  1011100 => 
  [
    'name' => 'Layla Miller',
    'description' => '',
    'series' => 
    [
      0 => 1866,
      1 => 1035,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/00/52740e37c104f.jpg',
  ],
  1011101 => 
  [
    'name' => 'Butterfly',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/00/4c0030b5dbc50.jpg',
  ],
  1011102 => 
  [
    'name' => 'Human Torch (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 6647,
      1 => 9958,
      2 => 15087,
      3 => 702,
      4 => 1244,
      5 => 1415,
      6 => 1520,
      7 => 1660,
      8 => 1892,
      9 => 2433,
      10 => 2311,
      11 => 1823,
      12 => 466,
      13 => 1383,
      14 => 78,
    ],
    'img' => '.',
  ],
  1011103 => 
  [
    'name' => 'Doctor Doom (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 6647,
      1 => 702,
      2 => 1660,
      3 => 9906,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/c0/53176ba52dea1.jpg',
  ],
  1011104 => 
  [
    'name' => 'Pride',
    'description' => '',
    'series' => 
    [
      0 => 9347,
      1 => 10275,
    ],
    'img' => '.',
  ],
  1011105 => 
  [
    'name' => 'Jimmy Woo',
    'description' => 'Jimmy Woo is a former FBI and SHIELD agent from the \'50s who now leads the Agents of Atlas in the present.',
    'series' => 
    [
      0 => 6807,
      1 => 13881,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/30/4c0030a8ec05b.jpg',
  ],
  1011106 => 
  [
    'name' => 'Venus (Siren)',
    'description' => 'During her time as an adventurer, Venus was approached by FBI agent Jimmy Woo, and she agreed to join Jimmy and his allies in freeing President Eisenhower from the clutches of the Yellow Claw.',
    'series' => 
    [
      0 => 6807,
      1 => 11854,
      2 => 2981,
      3 => 3717,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/f0/535ff36a8fbef.jpg',
  ],
  1011107 => 
  [
    'name' => 'Deviants',
    'description' => '',
    'series' => 
    [
      0 => 8821,
      1 => 3633,
    ],
    'img' => '.',
  ],
  1011109 => 
  [
    'name' => 'X-Men (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 1673,
      1 => 8512,
      2 => 13108,
      3 => 5743,
      4 => 2311,
      5 => 1823,
      6 => 474,
      7 => 5106,
      8 => 1055,
      9 => 13887,
      10 => 1758,
      11 => 2719,
      12 => 1223,
      13 => 1408,
      14 => 1519,
      15 => 1607,
      16 => 1662,
      17 => 1663,
      18 => 2242,
      19 => 3446,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/a0/4feb34f2017a0.jpg',
  ],
  1011110 => 
  [
    'name' => 'The Santerians',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011111 => 
  [
    'name' => 'Fantastick Four',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/80/4c0030a052a1c.jpg',
  ],
  1011112 => 
  [
    'name' => 'The Twelve',
    'description' => '',
    'series' => 
    [
      0 => 3194,
      1 => 13444,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/e0/4ce5a4acdfe22.jpg',
  ],
  1011113 => 
  [
    'name' => 'Blue Blade',
    'description' => '',
    'series' => 
    [
      0 => 2979,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/e0/4ce5a4b76d1c0.jpg',
  ],
  1011114 => 
  [
    'name' => 'Spider-Man (Marvel Zombies)',
    'description' => 'Zombie Spider-Man ate his own wife and aunt, the only two people left in the world who truly loved him.',
    'series' => 
    [
      0 => 454,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/00/531772716d0ac.jpg',
  ],
  1011115 => 
  [
    'name' => 'Tattoo',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011116 => 
  [
    'name' => 'Killraven',
    'description' => '',
    'series' => 
    [
      0 => 6666,
      1 => 3722,
      2 => 2437,
      3 => 3719,
    ],
    'img' => false,
  ],
  1011117 => 
  [
    'name' => 'Roughhouse',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011118 => 
  [
    'name' => 'Hulk (Marvel Zombies)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/00/53176c115da55.jpg',
  ],
  1011119 => 
  [
    'name' => 'Bob, Agent of Hydra',
    'description' => 'A cowardly young man, Bob was persuaded into joining the criminal organization HYDRA and has had numerous encounters with Deadpool and other Marvel heroes.',
    'series' => 
    [
      0 => 693,
      1 => 5701,
      2 => 9887,
      3 => 10137,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/a0/4ce5a4c2cd41b.jpg',
  ],
  1011120 => 
  [
    'name' => 'Albion',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011121 => 
  [
    'name' => 'Warbound',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/f0/53628de09a012.jpg',
  ],
  1011122 => 
  [
    'name' => 'Elloe Kaifi',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/50/5269559c8d0c9.jpg',
  ],
  1011123 => 
  [
    'name' => 'Omega the Unknown',
    'description' => '',
    'series' => 
    [
      0 => 3303,
      1 => 2056,
      2 => 1658,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/10/4ce5a4e4cd15d.jpg',
  ],
  1011124 => 
  [
    'name' => 'Nightshade',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011125 => 
  [
    'name' => 'Ultra-Adaptoid',
    'description' => '',
    'series' => 
    [
      0 => 1857,
    ],
    'img' => false,
  ],
  1011126 => 
  [
    'name' => 'Sally Floyd',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/d0/4ce5a4ef4b966.jpg',
  ],
  1011127 => 
  [
    'name' => 'Zodiak',
    'description' => 'Twelve demons merged with Norman Harrison, who, soon after, adopted the guise of Zodiac and used his abilities to harness powers based on the astrological Zodiac.',
    'series' => 
    [
      0 => 3743,
    ],
    'img' => false,
  ],
  1011128 => 
  [
    'name' => 'Venom (Ultimate)',
    'description' => 'While Eddie Brock’s academic career seemed to take off, his personal life was in shambles due to his quick temper and inability to connect with women on any level, and Eddie became isolated, but when his old friend Peter Parker contacted him, he felt a rush of enthusiasm: here, at last, was someone with whom he could truly bond.',
    'series' => 
    [
      0 => 466,
      1 => 1919,
      2 => 74,
      3 => 3188,
      4 => 7515,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/10/531773a976816.jpg',
  ],
  1011129 => 
  [
    'name' => 'Mystique (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 3188,
      1 => 7515,
    ],
    'img' => false,
  ],
  1011130 => 
  [
    'name' => 'Black Panther (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 3188,
      1 => 7515,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/20/53176a7b3a4e4.jpg',
  ],
  1011131 => 
  [
    'name' => 'Hawkeye (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 12615,
      1 => 14068,
      2 => 14061,
      3 => 3659,
      4 => 216,
      5 => 709,
      6 => 2422,
      7 => 3188,
      8 => 7515,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/03/53176be145914.jpg',
  ],
  1011132 => 
  [
    'name' => 'Blob (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 474,
      1 => 1758,
      2 => 2719,
      3 => 3296,
      4 => 210,
      5 => 80,
      6 => 243,
      7 => 3188,
      8 => 7515,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/00/4ce5a51b309b7.jpg',
  ],
  1011133 => 
  [
    'name' => 'Weapon Omega',
    'description' => '',
    'series' => 
    [
      0 => 2815,
      1 => 6057,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/a0/4ce5a526259fd.jpg',
  ],
  1011134 => 
  [
    'name' => 'Microchip',
    'description' => '',
    'series' => 
    [
      0 => 5860,
    ],
    'img' => false,
  ],
  1011135 => 
  [
    'name' => 'Maginty',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011136 => 
  [
    'name' => 'Air-Walker (Gabriel Lan)',
    'description' => '',
    'series' => 
    [
      0 => 1814,
      1 => 13577,
    ],
    'img' => false,
  ],
  1011137 => 
  [
    'name' => 'Baroness S\'Bak',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011138 => 
  [
    'name' => 'Beyonder',
    'description' => '',
    'series' => 
    [
      0 => 2055,
      1 => 15295,
    ],
    'img' => '.',
  ],
  1011139 => 
  [
    'name' => 'Cammi',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/a0/4c00309587477.jpg',
  ],
  1011140 => 
  [
    'name' => 'Centurions',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/c0/4c7c63dd70fe7.jpg',
  ],
  1011141 => 
  [
    'name' => 'Cerise',
    'description' => '',
    'series' => 
    [
      0 => 2011,
    ],
    'img' => false,
  ],
  1011142 => 
  [
    'name' => 'Devos',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/20/4c002f87999a7.jpg',
  ],
  1011143 => 
  [
    'name' => 'Fallen One',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011144 => 
  [
    'name' => 'Glorian',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/e0/4c002f81ea1f8.jpg',
  ],
  1011145 => 
  [
    'name' => 'Lord Hawal',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/10/4c002f7d355de.jpg',
  ],
  1011146 => 
  [
    'name' => 'Infant Terrible',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/f0/4c002f7854e02.jpg',
  ],
  1011147 => 
  [
    'name' => 'Korath',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/a0/4c002f7453eaa.jpg',
  ],
  1011148 => 
  [
    'name' => 'Kree',
    'description' => '',
    'series' => 
    [
      0 => 1866,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/50/53a0b4b5c40f1.jpg',
  ],
  1011149 => 
  [
    'name' => 'Tana Nile',
    'description' => '',
    'series' => 
    [
      0 => 2083,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/40/4c002f68816cd.jpg',
  ],
  1011150 => 
  [
    'name' => 'Paibok',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/30/4c002f617817e.jpg',
  ],
  1011151 => 
  [
    'name' => 'Praxagora',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/20/4c002f58eeeb4.jpg',
  ],
  1011152 => 
  [
    'name' => 'Preak',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/e0/4c002f5458faa.jpg',
  ],
  1011153 => 
  [
    'name' => 'Proemial Gods',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/f0/4c002f51c9436.jpg',
  ],
  1011154 => 
  [
    'name' => 'Ravenous',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011155 => 
  [
    'name' => 'Red Shift',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011156 => 
  [
    'name' => 'Salo',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/80/4c002f4ee689c.jpg',
  ],
  1011157 => 
  [
    'name' => 'Skreet',
    'description' => 'The Proemial God Aegis revealed that Skreet was a Chaos Mite, a race of very small and powerful beings, which were deemed unstable by the Cosmic Consonance.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/20/4c002f4a15c1c.jpg',
  ],
  1011158 => 
  [
    'name' => 'Spirit',
    'description' => 'Spirit is a member of the Luphomoid race and she is one of the few survivors of her planet\'s destruction.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/90/4c002f471444a.jpg',
  ],
  1011159 => 
  [
    'name' => 'Stellaris',
    'description' => 'It is unknown how Stellaris survived the extermination of her home world by the Celestials or how she acquired her living armor, but ever since she has committed herself to their destruction.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/e0/4c002f4445ce5.jpg',
  ],
  1011160 => 
  [
    'name' => 'Supreme Intelligence',
    'description' => 'The Supreme Intelligence is an organic, computer construct, created by the Kree to act as their supreme leader.',
    'series' => 
    [
      0 => 354,
      1 => 1340,
      2 => 1816,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/40/52b0d1eb0ca73.jpg',
  ],
  1011161 => 
  [
    'name' => 'Talos',
    'description' => 'Born without the ability to shape shift like other Skrulls, Talos became a savage fighter and a decorated military commander.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/80/4c002f3ec91c0.jpg',
  ],
  1011162 => 
  [
    'name' => 'Tenebrous',
    'description' => 'Tenebrous has existed in this universe since its infancy, and was imprisoned in the planet Kyln after a battle with Galactus.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/f0/4c002f3b92276.jpg',
  ],
  1011163 => 
  [
    'name' => 'Zarek',
    'description' => 'Zarek is a member of the Kree race with no superhuman abilities or specialized weaponry, but as a blue Kree, he has enhanced strength, stamina and durability.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/90/4c002f38d0e05.jpg',
  ],
  1011164 => 
  [
    'name' => 'Alvin Maker',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011165 => 
  [
    'name' => 'pug',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011166 => 
  [
    'name' => 'Tomas',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011167 => 
  [
    'name' => 'Ser Duncan',
    'description' => '',
    'series' => 
    [
      0 => 13492,
    ],
    'img' => false,
  ],
  1011168 => 
  [
    'name' => 'Sheva Callister',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011169 => 
  [
    'name' => 'Crimson King',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011170 => 
  [
    'name' => 'Alain',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011171 => 
  [
    'name' => 'John Farson',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011172 => 
  [
    'name' => 'Susan Delgado',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011173 => 
  [
    'name' => 'Marten Broadcloak',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011174 => 
  [
    'name' => 'Cuthbert',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011175 => 
  [
    'name' => 'Aginar',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011176 => 
  [
    'name' => 'Ajak',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/80/4c002f35c5215.jpg',
  ],
  1011177 => 
  [
    'name' => 'Forgotten One',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/70/4c002f332fb1f.jpg',
  ],
  1011178 => 
  [
    'name' => 'Kronos',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/90/4c7c623c74db8.jpg',
  ],
  1011179 => 
  [
    'name' => 'Pixie',
    'description' => '',
    'series' => 
    [
      0 => 14683,
      1 => 5338,
      2 => 13192,
      3 => 9906,
      4 => 13832,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/e0/4c002f2d626ee.jpg',
  ],
  1011180 => 
  [
    'name' => 'Sprite',
    'description' => 'Sprite is a mischievous Eternal who maintains a perpetual youthful appearance.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011181 => 
  [
    'name' => 'Thena',
    'description' => 'Thena, a second generation Eternal, is the eldest daughter of Zuras, leader of the Eternals of Earth, and Cybele, and although she has lived for more than 4,000 years, she is still considered a young woman by Eternal standards.',
    'series' => 
    [
      0 => 2017,
      1 => 1770,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/a0/4c002f2a83a8c.jpg',
  ],
  1011182 => 
  [
    'name' => 'Vampiro',
    'description' => 'Vampiro, part of the race known as the Eternals, lived on Earth for many years, eventually taking a wife and making a career for himself as a professional wrestler.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/b0/4c002f27b9a1e.jpg',
  ],
  1011183 => 
  [
    'name' => 'Zuras',
    'description' => 'Zuras was once the leader of the Eternals.',
    'series' => 
    [
      0 => 2017,
      1 => 1770,
    ],
    'img' => false,
  ],
  1011184 => 
  [
    'name' => 'Mentor',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011185 => 
  [
    'name' => 'Harley Davidson Cooper',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011186 => 
  [
    'name' => 'Leo (Zodiac)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011187 => 
  [
    'name' => 'Christian Walker',
    'description' => '',
    'series' => 
    [
      0 => 9073,
      1 => 14331,
    ],
    'img' => false,
  ],
  1011188 => 
  [
    'name' => 'Deena Pilgrim',
    'description' => '',
    'series' => 
    [
      0 => 9073,
      1 => 14331,
    ],
    'img' => false,
  ],
  1011189 => 
  [
    'name' => 'Retro Girl',
    'description' => '',
    'series' => 
    [
      0 => 14331,
    ],
    'img' => false,
  ],
  1011190 => 
  [
    'name' => 'Captain Cross',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011191 => 
  [
    'name' => 'Queen Noir',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011192 => 
  [
    'name' => 'Millenium Guard',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011193 => 
  [
    'name' => 'Kabuki',
    'description' => '',
    'series' => 
    [
      0 => 794,
    ],
    'img' => false,
  ],
  1011194 => 
  [
    'name' => 'Akemi',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011195 => 
  [
    'name' => 'Dorian Gray',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011196 => 
  [
    'name' => 'Captain Flint',
    'description' => '',
    'series' => 
    [
      0 => 6683,
    ],
    'img' => false,
  ],
  1011197 => 
  [
    'name' => 'Scarlet Spider (Ben Reilly)',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 1866,
      2 => 15298,
      3 => 13518,
      4 => 13532,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/20/4ce5a531089da.jpg',
  ],
  1011198 => 
  [
    'name' => 'Agents of Atlas',
    'description' => '',
    'series' => 
    [
      0 => 1980,
      1 => 1097,
      2 => 6807,
      3 => 9181,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/a0/4ce18a834b7f5.jpg',
  ],
  1011199 => 
  [
    'name' => 'Ezekiel',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 1292,
      2 => 1291,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/c0/4c002f2268bd4.jpg',
  ],
  1011200 => 
  [
    'name' => 'Luminals',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/b0/4c002f1f80d5c.jpg',
  ],
  1011201 => 
  [
    'name' => 'Gamma Corps',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011202 => 
  [
    'name' => 'Ord',
    'description' => '',
    'series' => 
    [
      0 => 744,
      1 => 7576,
      2 => 1464,
      3 => 1298,
      4 => 5055,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/40/4c002f1c476f9.jpg',
  ],
  1011203 => 
  [
    'name' => 'Mary Jane Watson (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 13831,
      1 => 14807,
      2 => 466,
      3 => 1919,
      4 => 1397,
      5 => 74,
      6 => 2280,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/f0/4ce5a53fae2a5.jpg',
  ],
  1011204 => 
  [
    'name' => 'Mindworm',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/d0/4c002f18eabe7.jpg',
  ],
  1011205 => 
  [
    'name' => 'Madripoor',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/f0/4c7c6221db444.jpg',
  ],
  1011206 => 
  [
    'name' => 'Doctor Faustus',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/e0/4ce5a54ac4d4b.jpg',
  ],
  1011207 => 
  [
    'name' => 'Purifiers',
    'description' => '',
    'series' => 
    [
      0 => 14151,
      1 => 6689,
      2 => 3839,
      3 => 3902,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/90/5274118670d83.jpg',
  ],
  1011208 => 
  [
    'name' => 'Anthem',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011209 => 
  [
    'name' => 'Calamity',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011210 => 
  [
    'name' => 'Mulholland Black',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011211 => 
  [
    'name' => 'The Renegades',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011212 => 
  [
    'name' => 'Sugar Man',
    'description' => 'The Sugar Man was in charge of the Seattle Core, a slave camp that helped power North America during the Age of Apocalypse.',
    'series' => 
    [
      0 => 7455,
      1 => 11477,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/d0/527413a2480b5.jpg',
  ],
  1011213 => 
  [
    'name' => 'Feral',
    'description' => '',
    'series' => 
    [
      0 => 6689,
    ],
    'img' => false,
  ],
  1011214 => 
  [
    'name' => 'Alexa Mendez',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011215 => 
  [
    'name' => 'The Liberty Legion',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011216 => 
  [
    'name' => 'The Liberteens',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011218 => 
  [
    'name' => 'Harry Osborn (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 466,
      1 => 1919,
      2 => 74,
      3 => 2280,
    ],
    'img' => false,
  ],
  1011219 => 
  [
    'name' => 'The Fury',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/c0/4c002f0d934b6.jpg',
  ],
  1011220 => 
  [
    'name' => 'Mockingbird',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 9086,
      2 => 13032,
      3 => 6476,
      4 => 6473,
      5 => 13691,
      6 => 9896,
      7 => 13160,
      8 => 8842,
      9 => 9922,
      10 => 10361,
      11 => 6988,
      12 => 6674,
      13 => 3632,
      14 => 13589,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/b0/51e829af23af9.jpg',
  ],
  1011221 => 
  [
    'name' => 'Giant Girl',
    'description' => '',
    'series' => 
    [
      0 => 1107,
    ],
    'img' => false,
  ],
  1011222 => 
  [
    'name' => 'Firestar (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 8512,
      1 => 466,
      2 => 5400,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/d0/4ce5a555585c6.jpg',
  ],
  1011223 => 
  [
    'name' => 'Skaar',
    'description' => 'The Hulk fathered a son while on the planet Sakaar, but thought him killed while still in his mother\'s womb; he was wrong.',
    'series' => 
    [
      0 => 10261,
      1 => 8842,
      2 => 12968,
      3 => 13882,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/20/4ce18a92c7a50.jpg',
  ],
  1011224 => 
  [
    'name' => 'Bishop (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011225 => 
  [
    'name' => 'Stryfe (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011226 => 
  [
    'name' => 'War Machine (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/a0/4ce5a5647d38b.jpg',
  ],
  1011227 => 
  [
    'name' => 'Amadeus Cho',
    'description' => '',
    'series' => 
    [
      0 => 13881,
      1 => 9350,
      2 => 3762,
      3 => 8842,
      4 => 1866,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/80/520288b9cb581.jpg',
  ],
  1011228 => 
  [
    'name' => 'Outlaw Kid',
    'description' => '',
    'series' => 
    [
      0 => 2988,
    ],
    'img' => false,
  ],
  1011229 => 
  [
    'name' => 'Malice (Earth-161)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011230 => 
  [
    'name' => 'Scrambler',
    'description' => 'Korean national Kim Il Sung was the youngest member of the Marauders, the superhuman assassins responsible for massacring the underground mutant community known as the Morlocks.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/a0/4c002f076451c.jpg',
  ],
  1011231 => 
  [
    'name' => 'Veda',
    'description' => 'Magdalena Marie Neuntauben became an accomplished martial artist, then a model, and later an actress, from which she donated all of her proceeds to her charity, which made her a prime candidate for recruitment into the Order.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011232 => 
  [
    'name' => 'Supernaut',
    'description' => 'Sergeant Milo Fields was recruited for the Order and regained the use of his legs after his nervous system intermingled with that of Aralune.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/90/4c002f048e0b6.jpg',
  ],
  1011233 => 
  [
    'name' => 'Fat Cobra',
    'description' => '',
    'series' => 
    [
      0 => 1140,
      1 => 8877,
      2 => 9924,
      3 => 9962,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/f0/4db58b3c6aaa6.jpg',
  ],
  1011234 => 
  [
    'name' => 'Prince of Orphans',
    'description' => '',
    'series' => 
    [
      0 => 14701,
      1 => 1140,
      2 => 9924,
    ],
    'img' => false,
  ],
  1011235 => 
  [
    'name' => 'Dog Brother #1',
    'description' => '',
    'series' => 
    [
      0 => 1140,
      1 => 9924,
    ],
    'img' => '.',
  ],
  1011236 => 
  [
    'name' => 'Bride of Nine Spiders (Immortal Weapons)',
    'description' => '',
    'series' => 
    [
      0 => 1140,
      1 => 9924,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/e0/4ce5a592212cc.jpg',
  ],
  1011237 => 
  [
    'name' => 'Tiger\'s Beautiful Daughter',
    'description' => '',
    'series' => 
    [
      0 => 1140,
      1 => 9924,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/80/4ce5a59d27a81.jpg',
  ],
  1011238 => 
  [
    'name' => 'Red Ghost (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011239 => 
  [
    'name' => 'Valkyrie (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/20/53177396dc74f.jpg',
  ],
  1011240 => 
  [
    'name' => 'Freak',
    'description' => '',
    'series' => 
    [
      0 => 454,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/50/4ce5a5b3cc0aa.jpg',
  ],
  1011241 => 
  [
    'name' => 'Menace',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 10445,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/20/4c002f01b93c0.jpg',
  ],
  1011242 => 
  [
    'name' => 'Screwball',
    'description' => 'Trained in parkour, Screwball, fairly new to the New York City superhuman criminal community, specializes in recording he crimes and broadcasting them live over the internet.',
    'series' => 
    [
      0 => 454,
      1 => 5376,
    ],
    'img' => '.',
  ],
  1011243 => 
  [
    'name' => 'Mandrill',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/20/4c002efee8164.jpg',
  ],
  1011244 => 
  [
    'name' => 'Mr. Negative',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 6604,
      2 => 14108,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/70/4c002efc322e3.jpg',
  ],
  1011246 => 
  [
    'name' => 'Hypno-Hustler',
    'description' => '',
    'series' => 
    [
      0 => 454,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/f0/4c002ef943bbf.jpg',
  ],
  1011247 => 
  [
    'name' => 'Dragon Lord',
    'description' => '',
    'series' => 
    [
      0 => 1552,
      1 => 2046,
    ],
    'img' => false,
  ],
  1011248 => 
  [
    'name' => 'Geiger',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/20/52740dec5e17a.jpg',
  ],
  1011249 => 
  [
    'name' => 'Red 9',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011250 => 
  [
    'name' => 'Katie Power',
    'description' => '',
    'series' => 
    [
      0 => 6689,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/90/4ce5a5bf6b872.jpg',
  ],
  1011251 => 
  [
    'name' => 'Jack Power',
    'description' => '',
    'series' => 
    [
      0 => 6689,
    ],
    'img' => false,
  ],
  1011252 => 
  [
    'name' => 'Cable (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/10/53176a2ccd8bc.jpg',
  ],
  1011253 => 
  [
    'name' => 'Apocalypse (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011254 => 
  [
    'name' => 'Mister Sinister (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011255 => 
  [
    'name' => 'Onslaught (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011256 => 
  [
    'name' => 'Gladiator (Melvin Potter)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/90/4ce5a5ca49c7f.jpg',
  ],
  1011257 => 
  [
    'name' => 'Lily Hollister',
    'description' => '',
    'series' => 
    [
      0 => 454,
    ],
    'img' => false,
  ],
  1011258 => 
  [
    'name' => 'Carlie Cooper',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 5376,
      2 => 10439,
    ],
    'img' => false,
  ],
  1011259 => 
  [
    'name' => 'Jackpot',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 5376,
      2 => 4766,
      3 => 13721,
    ],
    'img' => false,
  ],
  1011260 => 
  [
    'name' => 'Dexter Bennett',
    'description' => '',
    'series' => 
    [
      0 => 454,
    ],
    'img' => '.',
  ],
  1011261 => 
  [
    'name' => 'Vin Gonzales',
    'description' => '',
    'series' => 
    [
      0 => 454,
    ],
    'img' => '.',
  ],
  1011262 => 
  [
    'name' => 'Bill Hollister',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011263 => 
  [
    'name' => 'Martin Li',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011264 => 
  [
    'name' => 'Blue Shield',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011265 => 
  [
    'name' => 'Sinister Six',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 9086,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/80/52b0d6f874e15.jpg',
  ],
  1011266 => 
  [
    'name' => 'Adam Destine',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011267 => 
  [
    'name' => 'Wallop',
    'description' => 'Walter was born, presumably in the decade of 1910s, into the ClanDestine-- his father, the immortal Adam Destine and his mother a magical genie.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/c0/4c002ef63d1e4.jpg',
  ],
  1011268 => 
  [
    'name' => 'Cuckoo',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011269 => 
  [
    'name' => 'Newton Destine',
    'description' => '',
    'series' => 
    [
      0 => 3874,
      1 => 4773,
    ],
    'img' => false,
  ],
  1011270 => 
  [
    'name' => 'ClanDestine',
    'description' => '',
    'series' => 
    [
      0 => 3819,
      1 => 6669,
      2 => 3874,
    ],
    'img' => '.',
  ],
  1011271 => 
  [
    'name' => 'New X-Men',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/90/535ff4561d2d5.jpg',
  ],
  1011272 => 
  [
    'name' => 'Crimson Crusader',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/70/4c002ef0eb443.jpg',
  ],
  1011273 => 
  [
    'name' => 'Imp',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/30/4c002eee45d85.jpg',
  ],
  1011274 => 
  [
    'name' => 'Hex',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/f0/4c002eeb6ed5e.jpg',
  ],
  1011275 => 
  [
    'name' => 'Argent',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011276 => 
  [
    'name' => 'Cap\'n Oz',
    'description' => 'William was born into the ClanDestine, making him a creature that is part magic.  After events surrounding the death of his brother Vincent, he moved to Australia where he started an acting career as the superhero Cap\'n Oz.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/10/4c002ee7bf3f5.jpg',
  ],
  1011277 => 
  [
    'name' => 'Young X-Men',
    'description' => '',
    'series' => 
    [
      0 => 4443,
    ],
    'img' => '.',
  ],
  1011279 => 
  [
    'name' => 'Masters of Evil',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 1390,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/30/4c002e75e67db.jpg',
  ],
  1011280 => 
  [
    'name' => 'Rafael Vega',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011281 => 
  [
    'name' => 'Wolfpack',
    'description' => '',
    'series' => 
    [
      0 => 2039,
    ],
    'img' => false,
  ],
  1011282 => 
  [
    'name' => 'Night Nurse (Earth-9997)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/b0/4ce5a5ecbf8b9.jpg',
  ],
  1011283 => 
  [
    'name' => 'Lords of Avalon',
    'description' => '',
    'series' => 
    [
      0 => 1879,
    ],
    'img' => false,
  ],
  1011285 => 
  [
    'name' => 'Generation X',
    'description' => '',
    'series' => 
    [
      0 => 5825,
      1 => 6256,
      2 => 3643,
      3 => 3637,
    ],
    'img' => false,
  ],
  1011286 => 
  [
    'name' => 'Cobalt Man',
    'description' => '',
    'series' => 
    [
      0 => 2258,
    ],
    'img' => false,
  ],
  1011287 => 
  [
    'name' => 'Warlock (Technarchy)',
    'description' => 'The New Mutants\' Warlock is an alien being from an unidentified world where the a sentient life forms are "techno-organic" life that resembles circuitry and machinery in various ways.',
    'series' => 
    [
      0 => 7455,
      1 => 11477,
      2 => 13519,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/e0/4da612d77cbd0.jpg',
  ],
  1011288 => 
  [
    'name' => 'Jackal',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 14778,
      2 => 14920,
      3 => 15283,
      4 => 13511,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/e0/4c002e7012876.jpg',
  ],
  1011289 => 
  [
    'name' => 'Killmonger',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011290 => 
  [
    'name' => 'Wolf Cub',
    'description' => 'Nicholas Gleason enrolled at the Xavier Institute after being saved from a pair of mutant-haters by X-Men members Cyclops and Chamber.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011291 => 
  [
    'name' => 'Blindfold',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/10/4ce5a5f7cabea.jpg',
  ],
  1011292 => 
  [
    'name' => 'Greymalkin',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011293 => 
  [
    'name' => 'Ink',
    'description' => '',
    'series' => 
    [
      0 => 13492,
    ],
    'img' => false,
  ],
  1011294 => 
  [
    'name' => 'The Enforcers',
    'description' => '',
    'series' => 
    [
      0 => 454,
    ],
    'img' => false,
  ],
  1011295 => 
  [
    'name' => 'The Howling Commandos',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/c0/4ce5a603588f5.jpg',
  ],
  1011296 => 
  [
    'name' => 'Bi-Beast',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011297 => 
  [
    'name' => 'Agent Brand',
    'description' => '',
    'series' => 
    [
      0 => 744,
      1 => 13065,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/60/52695285d6e7e.jpg',
  ],
  1011298 => 
  [
    'name' => 'Armor (Hisako Ichiki)',
    'description' => '',
    'series' => 
    [
      0 => 744,
      1 => 15486,
    ],
    'img' => '.',
  ],
  1011299 => 
  [
    'name' => 'Guardians of the Galaxy',
    'description' => 'A group of cosmic adventurers brought together by Star-Lord, the  Guardians of the Galaxy protect the universe from threats all  across space. The team also includes Drax, Gamora, Groot and Rocket  Raccoon!',
    'series' => 
    [
      0 => 3743,
      1 => 421,
      2 => 3731,
      3 => 4885,
      4 => 16410,
      5 => 9039,
      6 => 2300,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/70/50febd8be6b5d.jpg',
  ],
  1011300 => 
  [
    'name' => 'High Evolutionary',
    'description' => '',
    'series' => 
    [
      0 => 2984,
      1 => 3061,
      2 => 1991,
      3 => 1988,
      4 => 1513,
      5 => 2012,
      6 => 10725,
      7 => 1671,
      8 => 2073,
      9 => 2080,
      10 => 2083,
      11 => 12847,
      12 => 3632,
      13 => 3648,
      14 => 6689,
      15 => 2100,
      16 => 211,
      17 => 242,
    ],
    'img' => '.',
  ],
  1011301 => 
  [
    'name' => 'Anole',
    'description' => '',
    'series' => 
    [
      0 => 5338,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/20/4c002e635ddd9.jpg',
  ],
  1011302 => 
  [
    'name' => 'Nehzno',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011303 => 
  [
    'name' => 'Next Avengers',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011304 => 
  [
    'name' => 'Thundra',
    'description' => 'Thundra was quite possibly her world\'s greatest female specimens, and as she won countless battles against the men, she was revered as the Sisterhood\'s greatest hero.',
    'series' => 
    [
      0 => 7231,
      1 => 6682,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/80/4ce5a61df19e5.jpg',
  ],
  1011305 => 
  [
    'name' => 'Maximus',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/80/52740f7c6f0b7.jpg',
  ],
  1011306 => 
  [
    'name' => 'Dargo Ktor',
    'description' => '',
    'series' => 
    [
      0 => 2083,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/b0/4ce5a6299ade4.jpg',
  ],
  1011307 => 
  [
    'name' => 'Star Brand',
    'description' => '',
    'series' => 
    [
      0 => 2075,
      1 => 1819,
    ],
    'img' => false,
  ],
  1011308 => 
  [
    'name' => 'Kinsey Walden',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011309 => 
  [
    'name' => 'Toro (Thomas Raymond)',
    'description' => 'As the Torch approached Toro, his presence caused Toro to burst into flame like the Torch himself, but while remaining unharmed, causing the Torch to realize that Toro had the same powers that he himself did.',
    'series' => 
    [
      0 => 4864,
      1 => 832,
      2 => 1613,
      3 => 1614,
      4 => 2020,
      5 => 3726,
      6 => 2567,
      7 => 1377,
      8 => 2981,
      9 => 1159,
      10 => 2048,
      11 => 304,
      12 => 52,
      13 => 10470,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/10/4e7a2165364ca.jpg',
  ],
  1011310 => 
  [
    'name' => 'Justin Hammer',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/e0/4ce18ab1be1f6.jpg',
  ],
  1011311 => 
  [
    'name' => 'Ultimo',
    'description' => 'Ultimo was a robotic construct that was developed several thousand years ago on an unknown world, which the Mandarin eventually discovered and claimed as his own creation.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/50/4c002e5d2432b.jpg',
  ],
  1011312 => 
  [
    'name' => 'Korvac',
    'description' => '',
    'series' => 
    [
      0 => 9086,
      1 => 1997,
      2 => 10739,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/00/4ce5a6396201b.jpg',
  ],
  1011313 => 
  [
    'name' => 'Ender Wiggin',
    'description' => '',
    'series' => 
    [
      0 => 13302,
      1 => 10171,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/90/4ce154e96ec1e.jpg',
  ],
  1011314 => 
  [
    'name' => 'Junta',
    'description' => '',
    'series' => 
    [
      0 => 553,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/20/4c002e5a298b8.jpg',
  ],
  1011315 => 
  [
    'name' => 'U-Foes',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/a0/4c002e56c5cd1.jpg',
  ],
  1011316 => 
  [
    'name' => 'Vapor',
    'description' => 'Vapor, along with her brother, was among the small group led by Simon Utrecht to simulate the crash that gave the Fantastic Four their powers, and has remained with the U-Foes ever since.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/40/4c002e541867f.jpg',
  ],
  1011317 => 
  [
    'name' => 'Ezekiel Stane',
    'description' => '',
    'series' => 
    [
      0 => 4889,
      1 => 7043,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/50/4ce5a64fd283a.jpg',
  ],
  1011318 => 
  [
    'name' => 'Iron Fist (Bei Bang-Wen)',
    'description' => '',
    'series' => 
    [
      0 => 4864,
      1 => 1140,
      2 => 9922,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/20/53176ebd40ad7.jpg',
  ],
  1011319 => 
  [
    'name' => 'Ken Ellis',
    'description' => 'Former Daily Bugle and current DB! reporter Ken Ellis first made a splash during the public debut of Ben Reilly as the Scarlet Spider, providing the new costumed hero with his name following a pitched battle with Venom.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/80/4c002e50c1a87.jpg',
  ],
  1011320 => 
  [
    'name' => 'M.O.D.O.G.',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011321 => 
  [
    'name' => 'Paper Doll',
    'description' => '',
    'series' => 
    [
      0 => 454,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/10/4ce5a65b2e406.jpg',
  ],
  1011322 => 
  [
    'name' => 'Druig',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011323 => 
  [
    'name' => 'Sentinels',
    'description' => '',
    'series' => 
    [
      0 => 13517,
      1 => 2258,
      2 => 6688,
      3 => 6689,
      4 => 5761,
      5 => 13880,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/50/4ce5a66693659.jpg',
  ],
  1011324 => 
  [
    'name' => 'Alpha Flight (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011325 => 
  [
    'name' => 'Salem\'s Seven (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011326 => 
  [
    'name' => 'Randall Flagg',
    'description' => '',
    'series' => 
    [
      0 => 9949,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/d0/4ce5a67201a4e.jpg',
  ],
  1011327 => 
  [
    'name' => 'Lady Bullseye',
    'description' => '',
    'series' => 
    [
      0 => 11665,
      1 => 9706,
      2 => 14720,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/90/4ce5a67d44f61.jpg',
  ],
  1011328 => 
  [
    'name' => 'Maestro',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/30/4d278ee344785.jpg',
  ],
  1011329 => 
  [
    'name' => 'Omega Sentinel',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/70/4c002e4dc5f11.jpg',
  ],
  1011330 => 
  [
    'name' => 'Revanche',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/60/4c002e0305708.gif',
  ],
  1011331 => 
  [
    'name' => 'Charlie Campion',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011333 => 
  [
    'name' => 'Dakota North',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/7/d0/4ce5a6888f769.jpg',
  ],
  1011334 => 
  [
    'name' => '3-D Man',
    'description' => '',
    'series' => 
    [
      0 => 1945,
      1 => 2045,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/e0/535fecbbb9784.jpg',
  ],
  1011335 => 
  [
    'name' => 'Maria Hill',
    'description' => '',
    'series' => 
    [
      0 => 10235,
      1 => 4889,
      2 => 7043,
      3 => 1866,
      4 => 5381,
      5 => 753,
      6 => 1260,
      7 => 4619,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/00/535ff3f5397cb.jpg',
  ],
  1011336 => 
  [
    'name' => 'New Mutants',
    'description' => '',
    'series' => 
    [
      0 => 6792,
      1 => 4002,
      2 => 4059,
      3 => 14398,
      4 => 8765,
      5 => 3719,
      6 => 8770,
      7 => 8755,
      8 => 8771,
      9 => 1595,
      10 => 2055,
      11 => 563,
      12 => 11477,
      13 => 7455,
      14 => 2053,
      15 => 1763,
      16 => 1764,
      17 => 4603,
      18 => 1186,
      19 => 267,
    ],
    'img' => '.',
  ],
  1011337 => 
  [
    'name' => 'Nightcrawler (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 474,
      1 => 1758,
      2 => 2719,
      3 => 1168,
      4 => 3296,
      5 => 210,
      6 => 81,
      7 => 82,
      8 => 243,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/a0/4c002e438799c.jpg',
  ],
  1011338 => 
  [
    'name' => 'Angel (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 474,
      1 => 2719,
      2 => 3296,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/50/531769ae4399f.jpg',
  ],
  1011339 => 
  [
    'name' => 'Blue Marvel',
    'description' => '',
    'series' => 
    [
      0 => 6079,
      1 => 7524,
      2 => 10235,
      3 => 13881,
      4 => 18309,
    ],
    'img' => false,
  ],
  1011340 => 
  [
    'name' => 'MI: 13',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/c0/4ce5a69fe70f2.jpg',
  ],
  1011341 => 
  [
    'name' => 'Starhawk (Stakar Ogord)',
    'description' => 'Though best known as a 31st century hero in the alternate Reality-691 timeline, the enigmatic, space-faring Starhawk originated a millennium earlier.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011342 => 
  [
    'name' => 'Vance Astro',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011343 => 
  [
    'name' => 'Jamie Braddock',
    'description' => '',
    'series' => 
    [
      0 => 9976,
    ],
    'img' => false,
  ],
  1011344 => 
  [
    'name' => 'Jazinda',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/00/4c002e3dbc0b3.jpg',
  ],
  1011345 => 
  [
    'name' => 'Tinkerer',
    'description' => 'The Tinkerer is an ordinary man who has an extraordinary talent for anything mechanical.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/60/4c002e3aaf52e.jpg',
  ],
  1011346 => 
  [
    'name' => 'Ben Reilly',
    'description' => 'Ben Reilly was the most genetically stable of the many clones of Spider-Man created by Professor Miles Warren, the Jackal.',
    'series' => 
    [
      0 => 1987,
      1 => 454,
      2 => 13721,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/20/4ce5a6abaea69.jpg',
  ],
  1011347 => 
  [
    'name' => 'Spider-Ham (Larval Earth)',
    'description' => 'As Spider-Ham Peter faced such nefarious foes as Ductor Doom, Bull-Frog, Raven the Hunter, Hogzilla, the Buzzard and the King-Pig!',
    'series' => 
    [
      0 => 5376,
    ],
    'img' => false,
  ],
  1011348 => 
  [
    'name' => 'Ricochet',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011349 => 
  [
    'name' => 'Blackout',
    'description' => '',
    'series' => 
    [
      0 => 6679,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/60/4ce5a6b641eb9.jpg',
  ],
  1011350 => 
  [
    'name' => 'Marvel Apes',
    'description' => '',
    'series' => 
    [
      0 => 5642,
      1 => 6336,
      2 => 6335,
    ],
    'img' => false,
  ],
  1011351 => 
  [
    'name' => 'Payback',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011352 => 
  [
    'name' => 'True Believers',
    'description' => '',
    'series' => 
    [
      0 => 5192,
    ],
    'img' => false,
  ],
  1011353 => 
  [
    'name' => 'Cosmo (dog)',
    'description' => '',
    'series' => 
    [
      0 => 14818,
      1 => 13604,
    ],
    'img' => false,
  ],
  1011354 => 
  [
    'name' => 'Barracuda',
    'description' => '',
    'series' => 
    [
      0 => 15267,
    ],
    'img' => false,
  ],
  1011355 => 
  [
    'name' => 'Captain Midlands',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011356 => 
  [
    'name' => 'Frankenstein\'s Monster',
    'description' => '',
    'series' => 
    [
      0 => 14022,
      1 => 2258,
    ],
    'img' => '.',
  ],
  1011357 => 
  [
    'name' => 'Karen Page',
    'description' => '',
    'series' => 
    [
      0 => 449,
      1 => 18,
      2 => 19,
    ],
    'img' => false,
  ],
  1011358 => 
  [
    'name' => 'Doctor Strange (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 2311,
      1 => 1823,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/f0/53176bbb6dc50.jpg',
  ],
  1011359 => 
  [
    'name' => 'Chat',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/50/4ce5a6cd63eaf.jpg',
  ],
  1011360 => 
  [
    'name' => 'Red Hulk',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 14818,
      2 => 9085,
      3 => 10051,
      4 => 15305,
      5 => 14703,
      6 => 14246,
      7 => 15623,
      8 => 3374,
      9 => 7251,
      10 => 13839,
      11 => 11557,
      12 => 8842,
      13 => 13745,
      14 => 9922,
      15 => 11151,
      16 => 9856,
      17 => 14914,
      18 => 13911,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/90/5102cb7fc1262.jpg',
  ],
  1011361 => 
  [
    'name' => 'American Eagle (Jason Strongbow)',
    'description' => '',
    'series' => 
    [
      0 => 2039,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/80/4ce5a6d8b8f2a.jpg',
  ],
  1011362 => 
  [
    'name' => 'Cottonmouth',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011364 => 
  [
    'name' => 'Magus (Technarch)',
    'description' => '',
    'series' => 
    [
      0 => 13519,
    ],
    'img' => false,
  ],
  1011365 => 
  [
    'name' => 'Vanisher (Telford Porter)',
    'description' => 'Nothing is known about the Vanisher\'s past before he embarked on a one-man crime wave of spectacular thefts using his power of self-teleportation.',
    'series' => 
    [
      0 => 4002,
      1 => 2258,
    ],
    'img' => false,
  ],
  1011366 => 
  [
    'name' => 'Sphinx (Anath-Na Mut)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011367 => 
  [
    'name' => 'Dark Avengers',
    'description' => '',
    'series' => 
    [
      0 => 7231,
      1 => 454,
      2 => 6599,
      3 => 1866,
      4 => 9922,
      5 => 6796,
      6 => 10469,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/a0/526032c703d06.jpg',
  ],
  1011368 => 
  [
    'name' => 'Secret Warriors',
    'description' => '',
    'series' => 
    [
      0 => 6796,
      1 => 10415,
      2 => 10416,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/e0/5260362fd0fb3.jpg',
  ],
  1011369 => 
  [
    'name' => 'Phil Sheldon',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/80/4ce5a6f45075d.jpg',
  ],
  1011370 => 
  [
    'name' => 'Molten Man',
    'description' => '',
    'series' => 
    [
      0 => 454,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/b0/4c002e34d7cdc.jpg',
  ],
  1011371 => 
  [
    'name' => 'Henry Peter Gyrich',
    'description' => '',
    'series' => 
    [
      0 => 1991,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/c0/535fed9b1ae7f.jpg',
  ],
  1011372 => 
  [
    'name' => 'MS2',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011373 => 
  [
    'name' => 'Sons of the Tiger',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011374 => 
  [
    'name' => 'Golden Guardian',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011375 => 
  [
    'name' => 'Leper Queen',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011376 => 
  [
    'name' => 'Reptil',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 9086,
      2 => 13250,
      3 => 10037,
    ],
    'img' => '.',
  ],
  1011377 => 
  [
    'name' => 'Spider-Man (Takuya Yamashiro)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/50/4be86ad8ada17.jpg',
  ],
  1011378 => 
  [
    'name' => 'Professor Monster',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011379 => 
  [
    'name' => 'Iron Cross Army',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011380 => 
  [
    'name' => 'Garia',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011381 => 
  [
    'name' => 'Shinko Yamashiro',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011382 => 
  [
    'name' => 'Amazoness',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011383 => 
  [
    'name' => 'Hitomi Sakuma',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011384 => 
  [
    'name' => 'Galia',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011385 => 
  [
    'name' => 'Cypher',
    'description' => '',
    'series' => 
    [
      0 => 7455,
      1 => 11477,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/10/4ce5a70abf6fb.jpg',
  ],
  1011386 => 
  [
    'name' => 'Karma',
    'description' => '',
    'series' => 
    [
      0 => 744,
      1 => 7455,
      2 => 11477,
      3 => 13519,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/00/50febe78aacca.jpg',
  ],
  1011387 => 
  [
    'name' => 'Dark X-Men',
    'description' => '',
    'series' => 
    [
      0 => 9051,
      1 => 2258,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/40/4ce5a7160a79b.jpg',
  ],
  1011388 => 
  [
    'name' => 'Pet Avengers',
    'description' => '',
    'series' => 
    [
      0 => 13032,
      1 => 13062,
      2 => 11717,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/50/4ce5a721b6817.jpg',
  ],
  1011389 => 
  [
    'name' => 'Frog Thor',
    'description' => '',
    'series' => 
    [
      0 => 13032,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/b0/4ce5a72d1a081.jpg',
  ],
  1011390 => 
  [
    'name' => 'Redwing',
    'description' => '',
    'series' => 
    [
      0 => 1991,
      1 => 832,
      2 => 13211,
      3 => 13330,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/70/4ce5a7383561c.jpg',
  ],
  1011391 => 
  [
    'name' => 'Hairball',
    'description' => '',
    'series' => 
    [
      0 => 13032,
    ],
    'img' => false,
  ],
  1011392 => 
  [
    'name' => 'She-Hulk (Lyra)',
    'description' => '',
    'series' => 
    [
      0 => 14059,
      1 => 8842,
      2 => 11799,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/03/527413f4341f7.jpg',
  ],
  1011393 => 
  [
    'name' => 'She-Hulk (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 1022,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/60/531771492e3ae.jpg',
  ],
  1011394 => 
  [
    'name' => 'Shiver Man',
    'description' => 'The Shiver Man is an undead bounty hunter who has worked with Nick Fury and Wolverine.',
    'series' => 
    [
      0 => 6792,
    ],
    'img' => false,
  ],
  1011395 => 
  [
    'name' => 'Talon (Fraternity of Raptors)',
    'description' => 'Falling to Earth wrapped in a ball of flame, Talon crash landed next to the home of Chris Powell, the young hero known as Darkhawk.',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011396 => 
  [
    'name' => 'Angel (Thomas Halloway)',
    'description' => '',
    'series' => 
    [
      0 => 3762,
      1 => 2981,
      2 => 8395,
      3 => 10470,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/03/531769834b15f.jpg',
  ],
  1011397 => 
  [
    'name' => 'Killer Shrike',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011398 => 
  [
    'name' => 'Romulus',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/70/4ce5a75b67009.jpg',
  ],
  1011399 => 
  [
    'name' => 'Meggan',
    'description' => '',
    'series' => 
    [
      0 => 13517,
      1 => 2039,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/20/4c002e2fa3070.jpg',
  ],
  1011400 => 
  [
    'name' => 'H.A.M.M.E.R.',
    'description' => '',
    'series' => 
    [
      0 => 1945,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/c0/4ce5a7675d903.jpg',
  ],
  1011401 => 
  [
    'name' => 'Richard Fisk',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011402 => 
  [
    'name' => 'Wendell Rand',
    'description' => '',
    'series' => 
    [
      0 => 1140,
    ],
    'img' => false,
  ],
  1011403 => 
  [
    'name' => 'Lei Kung, The Thunderer',
    'description' => '',
    'series' => 
    [
      0 => 1140,
    ],
    'img' => '.',
  ],
  1011404 => 
  [
    'name' => 'Jeryn Hogarth',
    'description' => '',
    'series' => 
    [
      0 => 1140,
    ],
    'img' => false,
  ],
  1011405 => 
  [
    'name' => 'Lucky Pierre',
    'description' => '',
    'series' => 
    [
      0 => 1140,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/e0/4c002e2ce2ba0.jpg',
  ],
  1011406 => 
  [
    'name' => 'Shadu the Shady',
    'description' => 'Shadu the Shady claimed to travel to many unseen magical lands and witnessed miracles he would duplicate at a club called the 53rd Card.',
    'series' => 
    [
      0 => 1140,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/50/4c002e2a04c75.jpg',
  ],
  1011407 => 
  [
    'name' => 'Contessa (Vera Vidal)',
    'description' => '',
    'series' => 
    [
      0 => 1140,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/70/4c002e274342b.jpg',
  ],
  1011408 => 
  [
    'name' => 'Lightning Lords of Nepal',
    'description' => '',
    'series' => 
    [
      0 => 1140,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/b0/4c002e24a1794.jpg',
  ],
  1011409 => 
  [
    'name' => 'Nine-Fold Daughters of Xao',
    'description' => '',
    'series' => 
    [
      0 => 1140,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/70/4c002e21e16a8.jpg',
  ],
  1011410 => 
  [
    'name' => 'Confederates of the Curious',
    'description' => '',
    'series' => 
    [
      0 => 1140,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/c0/4c002e1f3f490.jpg',
  ],
  1011411 => 
  [
    'name' => 'Chores MacGillicudy',
    'description' => '',
    'series' => 
    [
      0 => 1140,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/80/4c002e1c622c8.jpg',
  ],
  1011412 => 
  [
    'name' => 'Iron Fist (Wu Ao-Shi)',
    'description' => '',
    'series' => 
    [
      0 => 1140,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/7/03/53176f05a6851.jpg',
  ],
  1011413 => 
  [
    'name' => 'Iron Fist (Quan Yaozu)',
    'description' => '',
    'series' => 
    [
      0 => 1140,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/20/53176e89b563e.jpg',
  ],
  1011414 => 
  [
    'name' => 'Loa',
    'description' => '',
    'series' => 
    [
      0 => 4002,
      1 => 14059,
      2 => 5338,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/a0/52740fd40a2cc.jpg',
  ],
  1011415 => 
  [
    'name' => 'Human Fly (Richard Deacon)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1011416 => 
  [
    'name' => 'Blonde Phantom',
    'description' => '',
    'series' => 
    [
      0 => 14985,
      1 => 2981,
      2 => 2077,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/00/4ce5a77360c30.jpg',
  ],
  1011417 => 
  [
    'name' => 'Marvex',
    'description' => '',
    'series' => 
    [
      0 => 4776,
      1 => 3442,
      2 => 3443,
    ],
    'img' => false,
  ],
  1011418 => 
  [
    'name' => 'X-Babies',
    'description' => '',
    'series' => 
    [
      0 => 8952,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/10/4c002e198a6f3.jpg',
  ],
  1011419 => 
  [
    'name' => 'Phantom Reporter',
    'description' => '',
    'series' => 
    [
      0 => 4776,
      1 => 3442,
      2 => 3443,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/90/4ce5a77f0492c.jpg',
  ],
  1011420 => 
  [
    'name' => 'Grey Gargoyle',
    'description' => '',
    'series' => 
    [
      0 => 13691,
      1 => 13857,
      2 => 13827,
      3 => 4889,
      4 => 9718,
      5 => 14492,
      6 => 14491,
      7 => 13745,
      8 => 753,
      9 => 1260,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/03/528d319931e60.jpg',
  ],
  1011421 => 
  [
    'name' => 'Lethal Legion',
    'description' => '',
    'series' => 
    [
      0 => 14703,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/50/4c002e13dd271.jpg',
  ],
  1011422 => 
  [
    'name' => 'Nekra',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/c0/4c002e11323ba.jpg',
  ],
  1011424 => 
  [
    'name' => 'Miss America',
    'description' => '',
    'series' => 
    [
      0 => 2114,
      1 => 1991,
      2 => 2981,
      3 => 14720,
    ],
    'img' => false,
  ],
  1011425 => 
  [
    'name' => 'Whizzer (Stanley Stewart)',
    'description' => 'Stanley Stewart is a native of the alternate Earth (Earth-S) on which the organization of the superhuman champions known as the Squadron Supreme arose.',
    'series' => 
    [
      0 => 1991,
    ],
    'img' => false,
  ],
  1011426 => 
  [
    'name' => 'Scarlet Spider (Kaine)',
    'description' => '',
    'series' => 
    [
      0 => 454,
      1 => 15297,
      2 => 15298,
      3 => 10439,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/b0/4ed7bd3756650.jpg',
  ],
  1011427 => 
  [
    'name' => 'Nomad (Rikki Barnes)',
    'description' => '',
    'series' => 
    [
      0 => 832,
      1 => 13602,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/50/4ce5a79501bd6.jpg',
  ],
  1011428 => 
  [
    'name' => 'Hope Summers',
    'description' => '',
    'series' => 
    [
      0 => 15305,
      1 => 4002,
      2 => 9895,
      3 => 10218,
      4 => 9922,
      5 => 13192,
      6 => 14914,
      7 => 2258,
      8 => 14343,
      9 => 13833,
      10 => 9359,
      11 => 13832,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/90/511155f5015e0.jpg',
  ],
  1011432 => 
  [
    'name' => 'Enchantress (Sylvie Lushton)',
    'description' => '',
    'series' => 
    [
      0 => 3719,
    ],
    'img' => false,
  ],
  1011436 => 
  [
    'name' => 'Red She-Hulk',
    'description' => '',
    'series' => 
    [
      0 => 9085,
      1 => 14701,
      2 => 13691,
      3 => 8842,
      4 => 15297,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/70/50fec0bfb125a.jpg',
  ],
  1011490 => 
  [
    'name' => 'Hank Pym',
    'description' => ' ',
    'series' => 
    [
      0 => 7524,
      1 => 6079,
      2 => 6666,
      3 => 454,
      4 => 13082,
      5 => 3621,
      6 => 1991,
      7 => 354,
      8 => 9086,
      9 => 10037,
      10 => 1737,
      11 => 1816,
      12 => 2929,
      13 => 2384,
      14 => 2111,
      15 => 93,
      16 => 94,
      17 => 9860,
      18 => 9863,
      19 => 158,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/b0/5205305343bfd.jpg',
  ],
  1011766 => 
  [
    'name' => 'Azazel (Mutant)',
    'description' => 'A mutant from biblical times, Azazel is the ruler of the Neyaphem and claims that the Earth and everything on it belongs to him.',
    'series' => 
    [
      0 => 2258,
      1 => 15598,
    ],
    'img' => false,
  ],
  1012200 => 
  [
    'name' => 'Spider-Man (House of M)',
    'description' => 'In the House of M universe, surrounded by his family, including his young son Richard and close friends, Peter Parker is the envy of the world and its most popular mutant; but lately, Peter has felt like something is wrong in his world.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/60/5317718f0a2e7.jpg',
  ],
  1012295 => 
  [
    'name' => 'Spider-Man (Noir)',
    'description' => '',
    'series' => 
    [
      0 => 7511,
      1 => 15284,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/40/531771a14fcf6.jpg',
  ],
  1012513 => 
  [
    'name' => 'Gargoyle (Yuri Topolov)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1013727 => 
  [
    'name' => 'Miracleman',
    'description' => 'Michael Moran has a superhuman alter ego. By saying the trigger word "Kimota!" Michael turns into Miracleman! But is the good of being Miracleman enough to outweigh the cost?',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/90/545a820a2dc50.jpg',
  ],
  1014812 => 
  [
    'name' => 'Thunderbolt Ross',
    'description' => '',
    'series' => 
    [
      0 => 1991,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/f0/4ce59e13db02c.jpg',
  ],
  1014858 => 
  [
    'name' => 'Spider-Man (Ben Reilly)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/c0/5317717bed6fe.jpg',
  ],
  1014873 => 
  [
    'name' => 'Spider-Man (2099)',
    'description' => '',
    'series' => 
    [
      0 => 7220,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/c0/520d1ad3e543f.jpg',
  ],
  1014905 => 
  [
    'name' => 'Squadron Sinister',
    'description' => '',
    'series' => 
    [
      0 => 1991,
    ],
    'img' => false,
  ],
  1014973 => 
  [
    'name' => 'Brotherhood of Mutants (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 474,
      1 => 1758,
      2 => 80,
      3 => 81,
    ],
    'img' => false,
  ],
  1014974 => 
  [
    'name' => 'George Stacy (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 466,
      1 => 1919,
      2 => 74,
      3 => 1165,
      4 => 77,
      5 => 78,
    ],
    'img' => false,
  ],
  1014975 => 
  [
    'name' => 'Sir Ram',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/10/4cd043b0a3b2d.jpg',
  ],
  1014976 => 
  [
    'name' => 'Lady Vermin',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/10/4cd053529dd41.jpg',
  ],
  1014977 => 
  [
    'name' => 'Lady Ursula',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/40/4cd053ea971ed.jpg',
  ],
  1014978 => 
  [
    'name' => 'Naoko',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/40/4cd054abbdc21.jpg',
  ],
  1014979 => 
  [
    'name' => 'Shane Yamada-Jones',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/60/4cd05a33ee0bb.jpg',
  ],
  1014980 => 
  [
    'name' => 'Lord Tyger',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/b0/4cd05ab2bd5ee.jpg',
  ],
  1014981 => 
  [
    'name' => 'Bromley',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/00/4cd05b51df5c5.jpg',
  ],
  1014982 => 
  [
    'name' => 'Git Hoskins',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/c0/4cd05c0c4ffad.jpg',
  ],
  1014983 => 
  [
    'name' => 'Karen O\'Malley',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/b0/4cd05c8be4587.jpg',
  ],
  1014984 => 
  [
    'name' => 'Mr. Meugniot',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/20/4cd05e49a431f.jpg',
  ],
  1014985 => 
  [
    'name' => 'Green Goblin (Barry Norman Osborn)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/f0/4cd05ee55faa2.jpg',
  ],
  1014986 => 
  [
    'name' => 'The Hunter',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/60/4cd05f86b27e1.jpg',
  ],
  1014987 => 
  [
    'name' => 'Firedrake',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/a0/4cd0603234ecd.jpg',
  ],
  1014988 => 
  [
    'name' => 'Lester',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/80/4cd060cb94659.jpg',
  ],
  1014989 => 
  [
    'name' => 'Prima',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/90/4cd0612ec055b.jpg',
  ],
  1014990 => 
  [
    'name' => 'Alice',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/70/4cd061e6d6573.jpg',
  ],
  1014991 => 
  [
    'name' => 'Crusher Hogan (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 466,
      1 => 1919,
      2 => 74,
    ],
    'img' => false,
  ],
  1014992 => 
  [
    'name' => 'Dormammu (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 2311,
      1 => 1823,
    ],
    'img' => false,
  ],
  1014993 => 
  [
    'name' => 'Forge (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 474,
      1 => 210,
      2 => 243,
    ],
    'img' => false,
  ],
  1014994 => 
  [
    'name' => 'Gwen Stacy (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 13831,
      1 => 14807,
    ],
    'img' => false,
  ],
  1014995 => 
  [
    'name' => 'Hammerhead (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 474,
      1 => 2719,
      2 => 1168,
      3 => 82,
    ],
    'img' => false,
  ],
  1014996 => 
  [
    'name' => 'Hellfire Club (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 474,
      1 => 2719,
      2 => 3296,
    ],
    'img' => false,
  ],
  1014997 => 
  [
    'name' => 'Deathstrike (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 474,
      1 => 1519,
    ],
    'img' => false,
  ],
  1014998 => 
  [
    'name' => 'Moon Knight (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 466,
      1 => 1425,
    ],
    'img' => false,
  ],
  1014999 => 
  [
    'name' => 'Clea (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 2311,
      1 => 1823,
    ],
    'img' => false,
  ],
  1015000 => 
  [
    'name' => 'Reavers (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 466,
      1 => 1618,
    ],
    'img' => false,
  ],
  1015001 => 
  [
    'name' => 'Shang-Chi (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 2311,
      1 => 1823,
    ],
    'img' => false,
  ],
  1015002 => 
  [
    'name' => 'Skrulls (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 2311,
      1 => 1823,
    ],
    'img' => false,
  ],
  1015003 => 
  [
    'name' => 'Stacy X (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 474,
      1 => 2719,
      2 => 3296,
    ],
    'img' => false,
  ],
  1015004 => 
  [
    'name' => 'Thanos (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 702,
      1 => 1892,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/c0/5317734cbc1d0.jpg',
  ],
  1015005 => 
  [
    'name' => 'Wong (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 2311,
      1 => 1823,
    ],
    'img' => false,
  ],
  1015006 => 
  [
    'name' => 'Rick Jones (Ultimate)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1015007 => 
  [
    'name' => 'Dreaming Celestial',
    'description' => '',
    'series' => 
    [
      0 => 1058,
      1 => 5053,
      2 => 1973,
    ],
    'img' => false,
  ],
  1015017 => 
  [
    'name' => 'Krista Starr',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1015018 => 
  [
    'name' => 'Marcus Van Sciver',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1015035 => 
  [
    'name' => 'Shen',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/20/4cdd81a5743a4.jpg',
  ],
  1015239 => 
  [
    'name' => 'Avengers (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 9867,
      1 => 12615,
      2 => 14423,
      3 => 9958,
      4 => 10532,
      5 => 474,
      6 => 210,
      7 => 243,
      8 => 14617,
    ],
    'img' => false,
  ],
  1015280 => 
  [
    'name' => 'Super Hero Squad',
    'description' => '',
    'series' => 
    [
      0 => 9193,
      1 => 14057,
      2 => 13747,
      3 => 13806,
      4 => 13807,
    ],
    'img' => false,
  ],
  1016181 => 
  [
    'name' => 'Spider-Man (Miles Morales)',
    'description' => 'Teenager Miles Morales grew up in Brooklyn, New York. Recently, Miles took on the controversial and pressured role of Spider-Man shortly after the death of the original. Morales made his debut against The Kangaroo, much to the surprise and disapproval of many present at the confrontation.',
    'series' => 
    [
      0 => 16262,
      1 => 16264,
      2 => 13831,
      3 => 8509,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/50/537bcfa1eed73.jpg',
  ],
  1016452 => 
  [
    'name' => 'Spider-Man (Ai Apaec)',
    'description' => '',
    'series' => 
    [
      0 => 9922,
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/60/4fce7a4d900f4.jpg',
  ],
  1016823 => 
  [
    'name' => 'Abomination (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 474,
      1 => 210,
      2 => 243,
    ],
    'img' => false,
  ],
  1016824 => 
  [
    'name' => 'Ancient One (Ultimate)',
    'description' => '',
    'series' => 
    [
      0 => 2311,
      1 => 1823,
    ],
    'img' => false,
  ],
  1016825 => 
  [
    'name' => 'Ultimate Spider-Man (USM)',
    'description' => 'For the past year, Peter Parker has been saving New York City from villains as the masked hero, Spider-Man. Facing thugs and evil geniuses alike, he learns how to balance heroics with homework and friends. Despite being a Super Hero, Peter is very much an average 16-year-old.  With the added responsibilities of being Spider-Man, juggling all the aspects of his life will continually challenge him.                                                                 

When S.H.I.E.L.D. Director, Nick Fury, offers Peter the chance to raise his game and become THE ULTIMATE SPIDER-MAN, Midtown High becomes a secret operations base for Spider-Man and other young heroes under the watchful eye of Fury and the school’s new principal, Agent Coulson. ',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/50/5232171a451bb.jpg',
  ],
  1016837 => 
  [
    'name' => 'Nova (USM)',
    'description' => 'The hyperactive loose cannon of the team. Sam Alexander always feels like he has something to prove. 

The hyperactive loose cannon of the group. Sam always feels like he has something to prove.

Sam’s powers derive from the Nova Force, which is channeled through his helmet. These powers include flight, enhanced durability, and the ability to absorb and release pulses of energy. However, Sam does not know the extent of his powers, let alone how they work.  

Enthusiastic and immature, Sam’s eagerness can be a blessing and a curse. His personality will constantly clash with Spidey’s as they compete for bragging rights. ',
    'series' => 
    [
    ],
    'img' => '.',
  ],
  1016838 => 
  [
    'name' => 'White Tiger (USM)',
    'description' => 'White Tiger takes everything very seriously. A constant overachiever, she wants to be better and wants the group to be better. With less flashy powers, she feels like she has to work the hardest. 
 
A skilled acrobatic fighter with feline senses and claws. Ava wears a small Tiger amulet on her belt that gives her supernatural powers.

In the field, she’s constantly frustrated with Spider-Man and his irreverent attitude. But the longer the two fight side by side, the more they will understand one another.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/c0/52321764379a9.jpg',
  ],
  1016839 => 
  [
    'name' => 'Iron Fist (USM)',
    'description' => 'Danny is always focused yet relaxed - more Zen-focused than chill surfer dude. But when Danny turns into Iron First, he becomes very rigid with perfect posture. A very Yin/Yang character. 

Danny is THE Danny Rand – the 17-year-old head of the giant Rand Corporation.  His wealth rivals Osborn’s – but you’d never know it from his laid- back attitude. However, as Iron Fist, he takes his powers very seriously. 

While Danny and Luke are best friends, Danny has a special respect for Spider-Man, acting as a non-judgmental moral commentator on all of Spider-Man’s actions. ',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/20/52321751dffa6.jpg',
  ],
  1016840 => 
  [
    'name' => 'Power Man (USM)',
    'description' => 'A former street kid who’s not quite used to the Super Hero world, Luke is a no-nonsense tough guy who serves as the emotional heart and big brother of the group. He is fiercely loyal and nearly fearless in battle. 

Luke’s unbreakable skin and super strength make him the bruiser out of all the trainees. He’s the first guy to jump into a fight. However, he can still be hurt by concussive blasts and other forms of energy.

As Danny’s best friend, Luke is the translator for Danny’s sometimes spacey, non-sequitur comments. Luke will always be the first to defend Peter from others, both as civilians and Super Heroes.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/00/52321806b45cf.jpg',
  ],
  1017078 => 
  [
    'name' => 'Nova (Sam Alexander)',
    'description' => 'Sam Alexander inherited the role of Nova from his father, who went missing mysteriously. The new Human Rocket struggles to become a hero while searching for his dad.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/20/5269615681f91.jpg',
  ],
  1017098 => 
  [
    'name' => 'Hulk (HAS)',
    'description' => 'The Hulk is the biggest, strongest, smashing-est hero in the Marvel Universe - the green glue that holds his crazy family-like team together. Hulk loves saving the world by smashing every alien, sea creature, and planet (literally) that tries to destroy it. He is the star of his best bud A-Bomb\'s web series, and just wants to show people his good intentions!',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/10/5232027069e61.jpg',
  ],
  1017099 => 
  [
    'name' => 'Red Hulk (HAS)',
    'description' => 'US Army General Thunderbolt Ross used to a be a huge pain in Hulk\'s you know what! But as the saying goes, if you can\'t beat \'em, join \'em! He decided to supersize himself and join the team as Red! Just as cranky as before, Red still gives Hulk a hard time, but deep down he loves being a part of the Agents of S.M.A.S.H. - that, and his Gatling Laser Cannon. ',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/a0/523214eac3705.jpg',
  ],
  1017100 => 
  [
    'name' => 'A-Bomb (HAS)',
    'description' => 'Rick Jones has been Hulk\'s best bud since day one, but now he\'s more than a friend...he\'s a teammate! Transformed by a Gamma energy explosion, A-Bomb\'s thick, armored skin is just as strong and powerful as it is blue. And when he curls into action, he uses it like a giant bowling ball of destruction! ',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/20/5232158de5b16.jpg',
  ],
  1017101 => 
  [
    'name' => 'Skaar (HAS)',
    'description' => 'No one knows where Skaar, the savage sword-swinger, came from, but one thing is for sure...he\'s a Hulk. The intensity of Skaar’s war cry "Skaar Slash!" is matched only by his ferocious appetite. Although he is a great asset in the fight against evil, Skaar is just as destructive at home as he is on the battlefield. ',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/10/523214a2abcb4.jpg',
  ],
  1017102 => 
  [
    'name' => 'Devil Dinosaur (HAS)',
    'description' => 'They say a dog is man\'s best friend, so naturally Hulk\'s best friend is a T-Rex! Devil Dinosaur is the team\'s trusty prehistoric pet that occasionally lends his massive jaws to the fight. Although he\'s got tiny arms, Devil\'s got a big heart and an even bigger bite!',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/20/5232153150e10.jpg',
  ],
  1017103 => 
  [
    'name' => 'The Leader (HAS)',
    'description' => 'What the Hulk has in strength, the Leader has in brains. Hulk\'s arch nemesis was affected by the same Gamma radiation that transformed Bruce Banner; but, instead of Hulk-ified muscles, the Leader got a Hulk-ified head. He\'s smart, sinister, and obsessed with destroying the Hulk!',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/50/523215acd4a50.jpg',
  ],
  1017104 => 
  [
    'name' => 'Iron Man/Tony Stark (MAA)',
    'description' => 'Tony Stark is the genius inventor/billionaire/philanthropist owner of Stark Industries. With his super high-tech Iron Man suit, he is practically indestructible, able to fly, and has a large selection of weapons to choose from - but it\'s Tony\'s quick thinking and ability to adapt and improvise that make him an effective leader of the Avengers.        ',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/d0/5232190d42df2.jpg',
  ],
  1017105 => 
  [
    'name' => 'Captain America/Steve Rogers (MAA)',
    'description' => 'During World War II, Steve Rogers enlisted in the military and was injected with a super-serum that turned him into super-soldier Captain America! He\'s a skilled strategist and even more skilled with his shield, but it\'s his courage and good heart that makes Captain America both a leader and a true hero. ',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/10/52321928eaa72.jpg',
  ],
  1017106 => 
  [
    'name' => 'Thor (MAA)',
    'description' => 'Thor is the Asgardian Prince of Thunder, the son of Odin, and the realm\'s mightiest warrior. He loves the thrill of battle and is always eager to show off his power to the other Avengers, especially the Hulk. Thor\'s legendary Uru hammer, Mjolnir, gives him the power to control thunder and the ability to fly. He\'s found a new home on Earth and will defend it as his own... even if he doesn\'t understand its sayings and customs.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/03/52321948a51f2.jpg',
  ],
  1017107 => 
  [
    'name' => 'Hulk/Bruce Banner (MAA)',
    'description' => 'Scientist Bruce Banner was transformed into the Hulk as a result to gamma radiation exposure. Over 8 feet tall and weighing 1,040 pounds, it\'s Hulk\'s strength that makes him the strongest hero in the Marvel Universe! Hulk smashes all threats that dare disturb the peace and friendship he has found in the Avengers. ',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/0/03/523219b086a17.jpg',
  ],
  1017108 => 
  [
    'name' => 'Hawkeye/Clint Barton (MAA)',
    'description' => 'Hawkeye is an expert archer with an attitude just as on-target as his aim. His stealth combat experience and his ability to hit any target with any projectile make him a valuable member of the Avengers. However, he refuses to let things get too serious, as he has as many jokes as he does arrows!',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/03/5232198a81c17.jpg',
  ],
  1017109 => 
  [
    'name' => 'Black Widow/Natasha Romanoff (MAA)',
    'description' => 'Natasha Romanoff, also known as Black Widow, is a world-renowned super spy and one of S.H.I.E.L.D.\'s top agents. Her hand-to-hand combat skills, intelligence, and unpredictability make her a deadly secret weapon. True to her mysterious nature, Black Widow comes and goes as she pleases, but always appears exactly when her particular skills are needed.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/03/523219743a99b.jpg',
  ],
  1017110 => 
  [
    'name' => 'Falcon/Sam Wilson (MAA)',
    'description' => 'Recruited from S.H.I.E.L.D. by his hero and mentor Tony Stark, Falcon is the Avengers\' newest and youngest recruit. Like Tony, Sam is a genius with machines and technology. What he lacks in experience, Sam makes up in enthusiasm and determination. Falcon\'s suit of armor comes fully stocked with holographic wings, explosive flechettes, and retractable talons.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/10/523219c347dd1.jpg',
  ],
  1017111 => 
  [
    'name' => 'She-Hulk (HAS)',
    'description' => 'She-Hulk is the Hulk\'s action-loving cousin. She\'s unbelievably strong, pilots the group\'s heavily armed Jump Jet, and uses a pair of Gamma Gauntlets that give her fists an added energy wallop. As the most competitive member of the team, She-Hulk never backs down from a fight, arm-wrestling match, or burping contest!  ',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/d0/523214b8ea2cf.jpg',
  ],
  1017292 => 
  [
    'name' => 'Daredevil (LEGO Marvel Super Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1017294 => 
  [
    'name' => 'Iron Man (LEGO Marvel Super Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/90/5239c3cc8a259.jpg',
  ],
  1017295 => 
  [
    'name' => 'Captain America (LEGO Marvel Super Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/d/b0/5239c38051946.jpg',
  ],
  1017296 => 
  [
    'name' => 'Black Widow (LEGO Marvel Super Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/30/5239c3722bdc5.jpg',
  ],
  1017297 => 
  [
    'name' => 'Wolverine (LEGO Marvel Super Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/00/5239c3b29cb40.jpg',
  ],
  1017298 => 
  [
    'name' => 'Nick Fury (LEGO Marvel Super Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1017299 => 
  [
    'name' => 'Loki (LEGO Marvel Super Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/20/5239c4e1c5351.jpg',
  ],
  1017300 => 
  [
    'name' => 'Dr. Strange (Marvel: Avengers Alliance)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/f0/5239b5e7d7f70.jpg',
  ],
  1017301 => 
  [
    'name' => 'Invisible Woman (Marvel: Avengers Alliance)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/80/5239b5c4cb782.jpg',
  ],
  1017302 => 
  [
    'name' => 'Thor (Marvel: Avengers Alliance)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => '.',
  ],
  1017303 => 
  [
    'name' => 'Hulk (Marvel: Avengers Alliance)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/b0/5239b5d891fc1.jpg',
  ],
  1017304 => 
  [
    'name' => 'War Machine (Marvel: Avengers Alliance)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/03/5239b57a59812.jpg',
  ],
  1017305 => 
  [
    'name' => 'Spider-Man (Marvel: Avengers Alliance)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/03/5239b59f49020.jpg',
  ],
  1017306 => 
  [
    'name' => 'Punisher (Marvel: Avengers Alliance)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/0/03/5239b5b358300.jpg',
  ],
  1017307 => 
  [
    'name' => 'Cable (Marvel: Avengers Alliance)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/d0/5239b5f863d43.jpg',
  ],
  1017308 => 
  [
    'name' => 'Scarlet Witch (Marvel Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/60/5239be3a2a6e9.jpg',
  ],
  1017309 => 
  [
    'name' => 'Storm (Marvel Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/30/5239be29833f9.jpg',
  ],
  1017310 => 
  [
    'name' => 'Iron Man (Marvel Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/40/5239be60a67da.jpg',
  ],
  1017311 => 
  [
    'name' => 'Hawkeye (Marvel Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/70/5239be7020a11.jpg',
  ],
  1017312 => 
  [
    'name' => 'Daredevil (Marvel Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/00/5239be8a1c152.jpg',
  ],
  1017313 => 
  [
    'name' => 'Thing (Marvel Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/20/5239be1a26d18.jpg',
  ],
  1017314 => 
  [
    'name' => 'Rocket Raccoon (Marvel Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/40/5239be52b8c32.jpg',
  ],
  1017315 => 
  [
    'name' => 'Thor (Marvel Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/20/5239be0b8ecd1.jpg',
  ],
  1017316 => 
  [
    'name' => 'Deadpool (Deadpool)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/f0/5239c232c227c.jpg',
  ],
  1017317 => 
  [
    'name' => 'Cable (Deadpool)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/50/5239c22332b00.jpg',
  ],
  1017318 => 
  [
    'name' => 'Mister Sinister (Deadpool)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/e/10/5239c24883863.jpg',
  ],
  1017319 => 
  [
    'name' => 'Rogue (Deadpool)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/20/5239c25861c1a.jpg',
  ],
  1017320 => 
  [
    'name' => 'Iron Man (Iron Man 3 - The Official Game)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/03/5239c1408c936.jpg',
  ],
  1017321 => 
  [
    'name' => 'M.O.D.O.K. (Iron Man 3 - The Official Game)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/00/5239c14fcddc0.jpg',
  ],
  1017322 => 
  [
    'name' => 'War Machine (Iron Man 3 - The Official Game)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/80/5239c15d562d6.jpg',
  ],
  1017323 => 
  [
    'name' => 'Crimson Dynamo (Iron Man 3 - The Official Game)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/b0/5239c1307d9c9.jpg',
  ],
  1017324 => 
  [
    'name' => 'Gamora (Marvel War of Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/e0/5239bfe911e8e.jpg',
  ],
  1017325 => 
  [
    'name' => 'Wolverine (Marvel War of Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/1/60/5239bf9387906.jpg',
  ],
  1017326 => 
  [
    'name' => 'Iron Man (Marvel War of Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/f/f0/5239bfbfeea88.jpg',
  ],
  1017327 => 
  [
    'name' => 'Captain America (Marvel War of Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/2/03/5239c005a4827.jpg',
  ],
  1017328 => 
  [
    'name' => 'Thor (Marvel War of Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/d0/5239bf547de26.jpg',
  ],
  1017329 => 
  [
    'name' => 'Ghost Rider (Marvel War of Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/f0/5239bfd918fb5.jpg',
  ],
  1017330 => 
  [
    'name' => 'Black Bolt (Marvel War of Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/8/a0/5239c021b3bfc.jpg',
  ],
  1017331 => 
  [
    'name' => 'She-Hulk (Marvel War of Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/20/5239bfa2c54fa.jpg',
  ],
  1017332 => 
  [
    'name' => 'Spider-Man (LEGO Marvel Super Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/03/5239c4d095611.jpg',
  ],
  1017333 => 
  [
    'name' => 'Hulk (LEGO Marvel Super Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/f0/5239c399a35df.jpg',
  ],
  1017336 => 
  [
    'name' => 'Deadpool (LEGO Marvel Super Heroes)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/a/a0/5239f9a8ee88d.jpg',
  ],
  1017438 => 
  [
    'name' => 'Araٌa',
    'description' => '',
    'series' => 
    [
    ],
    'img' => false,
  ],
  1017472 => 
  [
    'name' => 'Cable (X-Men: Battle of the Atom)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/b0/52d729bb9b84b.jpg',
  ],
  1017473 => 
  [
    'name' => 'Cyclops (X-Men: Battle of the Atom)',
    'description' => '',
    'series' => 
    [
    ],
      'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/40/52d72a169ddf0.jpg',
  ],
  1017474 => 
  [
    'name' => 'Deadpool (X-Men: Battle of the Atom)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/20/52d72a5b55a55.jpg',
  ],
  1017475 => 
  [
    'name' => 'Iceman (X-Men: Battle of the Atom)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/70/52d72ac3c45f9.jpg',
  ],
  1017476 => 
  [
    'name' => 'Kitty Pryde (X-Men: Battle of the Atom)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/b/60/52d72adad132a.jpg',
  ],
  1017477 => 
  [
    'name' => 'Magneto (X-Men: Battle of the Atom)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/20/52d72b0f5dcd5.jpg',
  ],
  1017478 => 
  [
    'name' => 'Rogue (X-Men: Battle of the Atom)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/3/10/52d72b4157a62.jpg',
  ],
  1017479 => 
  [
    'name' => 'Wolverine (X-Men: Battle of the Atom)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/6/90/52d72b4c8376c.jpg',
  ],
  1017574 => 
  [
    'name' => 'Angela (Aldrif Odinsdottir)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/7/00/545a82f59dd73.jpg',
  ],
  1017575 => 
  [
    'name' => 'Captain America (Sam Wilson)',
    'description' => '<p class="Body">Sam Wilson, a Harlem native, previously operated under the name Falcon, fighting alongside the Avengers. When his longtime friend Steve Rogers stepped down as Captain America, Wilson was hand-picked to fill the role. Now the former Falcon soars through the skies wearing red, white and blue.</p>',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/c/80/545a84a75ddaf.jpg',
  ],
  1017576 => 
  [
    'name' => 'Thor (Goddess of Thunder)',
    'description' => '<p class="Body">When the Odinson lost his ability to wield Mjolnir, the role of Thor, God of Thunder, was left unoccupied&hellip;albeit for a short time. A mysterious female figure picked up the hammer with ease, changing the inscription to fit her status as the Goddess of Thunder.</p>',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/4/10/545a857a38f92.jpg',
  ],
  1017577 => 
  [
    'name' => 'Ms. Marvel (Kamala Khan)',
    'description' => 'A Muslim-American teenager growing up in Jersey City, Kamala Khan gained shape-shifting powers when Inhumanity spread over the Earth. A fan of super heroes, in particular Carol Danvers, Kamala took up Captain Marvel\'s former identity, becoming the new Ms. Marvel. This up and coming hero works to protect her community and understand her place in the world.',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/5/b0/548730dac2a40.jpg',
  ],
  1017583 => 
  [
    'name' => 'Devil Dinosaur (Devil Dinosaur)',
    'description' => '',
    'series' => 
    [
    ],
    'img' => 'http://i.annihil.us/u/prod/marvel/i/mg/9/90/54aedc448b925.jpg',
  ],
];
    }
}
