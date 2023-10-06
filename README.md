<!-- PROJECT SHIELDS -->
<!--
*** This template uses markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->

[![Contributors][contributors-shield]][contributors-url] [![Forks][forks-shield]][forks-url] [![Stargazers][stars-shield]][stars-url] [![Issues][issues-shield]][issues-url]

<!-- ABOUT THE PROJECT -->
## About The Project

[![Product Name Screen Shot][product-screenshot]](https://example.com)

This project was realized during my training as a web applications developer for a fictitious real estate agency. It comes from an [online tutorial provided by Grafikart](https://grafikart.fr/formations/symfony-4-pratique) originally developed using Symfony 4, that I updated using Symfony 6.

### Built With

- Markdown, Html 5, Css 3, Php 8
- Symfony 6, Bootstrap 4
- Git, Github
- VS Code
- Love :)

<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple steps.

### Prerequisites

* Git
* MySQL or MariaDB
* Symfony CLI

### Installation
 
1. Clone the repo
2. Open the .env file and customize it with your MySQL/MariaDB username and password and the version of your MySQL/MariaDB server
3. Create the database and name it "agence_immo_dev" (or give it another name matching with your .env file customization)
4. Import the data from the docs/agence_immo_dev.sql file (utf-8 and SQL data)
5. Launch the server:
```sh
cd to/the/project/directory/path
cd AgenceImmo
symfony serve -d
```
6. Open the https://127.0.0.1:8000 address in your favorite internet browser (or another port that 8000 if the Symfony server gives you another port at starting)


<!-- USAGE EXAMPLES -->
## Usage

You can use the web application as a default visiter at the root address.
You can use it as an administrator using the /admin address. In this administrator area, you'll be able to add new properties and edit and delete existing ones.



<!-- CONTACT -->
## Contact

Christophe Simon: [personnal website](https://www.csimon.info)

Project Link: [https://github.com/christophe-simon/AgenceImmo](https://github.com/christophe-simon/AgenceImmo)



<!-- ACKNOWLEDGEMENTS -->
## Acknowledgements

- This readme version is a customized version of this [github repository](https://github.com/NicolasBrondin/basic-readme-template) by NicolasBrondin





<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/christophe-simon/basic-readme-template.svg?style=flat-square
[contributors-url]: https://github.com/christophe-simon/basic-readme-template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/christophe-simon/basic-readme-template.svg?style=flat-square
[forks-url]: https://github.com/christophe-simon/basic-readme-template/network/members
[stars-shield]: https://img.shields.io/github/stars/christophe-simon/basic-readme-template.svg?style=flat-square
[stars-url]: https://github.com/christophe-simon/basic-readme-template/stargazers
[issues-shield]: https://img.shields.io/github/issues/christophe-simon/basic-readme-template.svg?style=flat-square
[issues-url]: https://github.com/christophe-simon/basic-readme-template/issues
[license-shield]: https://img.shields.io/github/license/christophe-simon/basic-readme-template.svg?style=flat-square
[license-url]: https://github.com/christophe-simon/basic-readme-template/blob/master/LICENSE.txt
[product-screenshot]: docs/cover.jpg
