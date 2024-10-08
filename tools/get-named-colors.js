/**
 * Gets all colors used in website.
 * 
 * From: 
 * - https://stackoverflow.com/questions/23842320/get-all-style-attribute-colors
 * Remove the `addEventListener` wrapper if running in console.
 */
document.addEventListener("DOMContentLoaded", event =>
  {
      let names = ["background-color", "color"];
      let colors = [];
  
      var rgbColor =
      {
          'rgb(240, 248, 255)': 'aliceblue',
          'rgb(250, 235, 215)': 'antiquewhite',
          'rgb(0, 255, 255)': 'aqua',
          'rgb(127, 255, 212)': 'aquamarine',
          'rgb(240, 255, 255)': 'azure',
          'rgb(245, 245, 220)': 'beige',
          'rgb(255, 228, 196)': 'bisque',
          'rgb(0, 0, 0)': 'black',
          'rgb(255, 235, 205)': 'blanchedalmond',
          'rgb(0, 0, 255)': 'blue',
          'rgb(138, 43, 226)': 'blueviolet',
          'rgb(165, 42, 42)': 'brown',
          'rgb(222, 184, 135)': 'burlywood',
          'rgb(95, 158, 160)': 'cadetblue',
          'rgb(127, 255, 0)': 'chartreuse',
          'rgb(210, 105, 30)': 'chocolate',
          'rgb(255, 127, 80)': 'coral',
          'rgb(100, 149, 237)': 'cornflowerblue',
          'rgb(255, 248, 220)': 'cornsilk',
          'rgb(220, 20, 60)': 'crimson',
          'rgb(0, 0, 139)': 'darkblue',
          'rgb(0, 139, 139)': 'darkcyan',
          'rgb(184, 134, 11)': 'darkgoldenrod',
          'rgb(169, 169, 169)': 'darkgray',
          'rgb(0, 100, 0)': 'darkgreen',
          'rgb(189, 183, 107)': 'darkkhaki',
          'rgb(139, 0, 139)': 'darkmagenta',
          'rgb(85, 107, 47)': 'darkolivegreen',
          'rgb(255, 140, 0)': 'darkorange',
          'rgb(153, 50, 204)': 'darkorchid',
          'rgb(139, 0, 0)': 'darkred',
          'rgb(233, 150, 122)': 'darksalmon',
          'rgb(143, 188, 143)': 'darkseagreen',
          'rgb(72, 61, 139)': 'darkslateblue',
          'rgb(47, 79, 79)': 'darkslategray',
          'rgb(0, 206, 209)': 'darkturquoise',
          'rgb(148, 0, 211)': 'darkviolet',
          'rgb(255, 20, 147)': 'deeppink',
          'rgb(0, 191, 255)': 'deepskyblue',
          'rgb(105, 105, 105)': 'dimgray',
          'rgb(30, 144, 255)': 'dodgerblue',
          'rgb(178, 34, 34)': 'firebrick',
          'rgb(255, 250, 240)': 'floralwhite',
          'rgb(34, 139, 34)': 'forestgreen',
          'rgb(255, 0, 255)': 'fuchsia',
          'rgb(220, 220, 220)': 'gainsboro',
          'rgb(248, 248, 255)': 'ghostwhite',
          'rgb(255, 215, 0)': 'gold',
          'rgb(218, 165, 32)': 'goldenrod',
          'rgb(128, 128, 128)': 'gray',
          'rgb(0, 128, 0)': 'green',
          'rgb(173, 255, 47)': 'greenyellow',
          'rgb(240, 255, 240)': 'honeydew',
          'rgb(255, 105, 180)': 'hotpink',
          'rgb(205, 92, 92)': 'indianred',
          'rgb(75, 0, 130)': 'indigo',
          'rgb(255, 255, 240)': 'ivory',
          'rgb(240, 230, 140)': 'khaki',
          'rgb(230, 230, 250)': 'lavender',
          'rgb(255, 240, 245)': 'lavenderblush',
          'rgb(124, 252, 0)': 'lawngreen',
          'rgb(255, 250, 205)': 'lemonchiffon',
          'rgb(173, 216, 230)': 'lightblue',
          'rgb(240, 128, 128)': 'lightcoral',
          'rgb(224, 255, 255)': 'lightcyan',
          'rgb(250, 250, 210)': 'lightgoldenrodyellow',
          'rgb(211, 211, 211)': 'lightgray',
          'rgb(144, 238, 144)': 'lightgreen',
          'rgb(255, 182, 193)': 'lightpink',
          'rgb(255, 160, 122)': 'lightsalmon',
          'rgb(32, 178, 170)': 'lightseagreen',
          'rgb(135, 206, 250)': 'lightskyblue',
          'rgb(119, 136, 153)': 'lightslategray',
          'rgb(176, 196, 222)': 'lightsteelblue',
          'rgb(255, 255, 224)': 'lightyellow',
          'rgb(0, 255, 0)': 'lime',
          'rgb(50, 205, 50)': 'limegreen',
          'rgb(250, 240, 230)': 'linen',
          'rgb(128, 0, 0)': 'maroon',
          'rgb(102, 205, 170)': 'mediumaquamarine',
          'rgb(0, 0, 205)': 'mediumblue',
          'rgb(186, 85, 211)': 'mediumorchid',
          'rgb(147, 112, 219)': 'mediumpurple',
          'rgb(60, 179, 113)': 'mediumseagreen',
          'rgb(123, 104, 238)': 'mediumslateblue',
          'rgb(0, 250, 154)': 'mediumspringgreen',
          'rgb(72, 209, 204)': 'mediumturquoise',
          'rgb(199, 21, 133)': 'mediumvioletred',
          'rgb(25, 25, 112)': 'midnightblue',
          'rgb(245, 255, 250)': 'mintcream',
          'rgb(255, 228, 225)': 'mistyrose',
          'rgb(255, 228, 181)': 'moccasin',
          'rgb(255, 222, 173)': 'navajowhite',
          'rgb(0, 0, 128)': 'navy',
          'rgb(253, 245, 230)': 'oldlace',
          'rgb(128, 128, 0)': 'olive',
          'rgb(107, 142, 35)': 'olivedrab',
          'rgb(255, 165, 0)': 'orange',
          'rgb(255, 69, 0)': 'orangered',
          'rgb(218, 112, 214)': 'orchid',
          'rgb(238, 232, 170)': 'palegoldenrod',
          'rgb(152, 251, 152)': 'palegreen',
          'rgb(175, 238, 238)': 'paleturquoise',
          'rgb(219, 112, 147)': 'palevioletred',
          'rgb(255, 239, 213)': 'papayawhip',
          'rgb(255, 218, 185)': 'peachpuff',
          'rgb(205, 133, 63)': 'peru',
          'rgb(255, 192, 203)': 'pink',
          'rgb(221, 160, 221)': 'plum',
          'rgb(176, 224, 230)': 'powderblue',
          'rgb(128, 0, 128)': 'purple',
          'rgb(255, 0, 0)': 'red',
          'rgb(188, 143, 143)': 'rosybrown',
          'rgb(65, 105, 225)': 'royalblue',
          'rgb(139, 69, 19)': 'saddlebrown',
          'rgb(250, 128, 114)': 'salmon',
          'rgb(244, 164, 96)': 'sandybrown',
          'rgb(46, 139, 87)': 'seagreen',
          'rgb(255, 245, 238)': 'seashell',
          'rgb(160, 82, 45)': 'sienna',
          'rgb(192, 192, 192)': 'silver',
          'rgb(135, 206, 235)': 'skyblue',
          'rgb(106, 90, 205)': 'slateblue',
          'rgb(112, 128, 144)': 'slategray',
          'rgb(255, 250, 250)': 'snow',
          'rgb(0, 255, 127)': 'springgreen',
          'rgb(70, 130, 180)': 'steelblue',
          'rgb(210, 180, 140)': 'tan',
          'rgb(0, 128, 128)': 'teal',
          'rgb(216, 191, 216)': 'thistle',
          'rgb(255, 99, 71)': 'tomato',
          'rgb(64, 224, 208)': 'turquoise',
          'rgb(238, 130, 238)': 'violet',
          'rgb(245, 222, 179)': 'wheat',
          'rgb(255, 255, 255)': 'white',
          'rgb(245, 245, 245)': 'whitesmoke',
          'rgb(255, 255, 0)': 'yellow',
          'rgb(154, 205, 50)': 'yellowgreen'
      }
  
      names.forEach(name =>
      {
          Array.from(document.body.querySelectorAll("*")).forEach(element =>
          {
              let style = getComputedStyle(element);
  
              let value = style[name]; if(!value) { return; }
              if(value in rgbColor) { value = rgbColor[value]; }
  
              if(!colors.includes(value))
              {
                  colors.push(value);
              }
          });
      });
  
      console.log(colors);
  });