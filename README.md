<a name="readme-top"></a>


<!-- PROJECT LOGO -->
<br />
<div align="center">
<h3 align="center">Personal Library Database</h3>

  <p align="center">
    This repository functions to manage books in a personal library and operates locally using localhost.
    <br />
    <a href="https://github.com/Dhaboav/web-login"><strong>Explore the docs »</strong></a>    
    
  Home Sample:
  ![Sample Dashboard](https://github.com/Dhaboav/personal-library/blob/master/home.png)
  
  </p>
</div>


<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li><a href="#file-structure">File Structure</a></li>
    <li><a href="#Get-started">Get-started</a></li>
  </ol>
</details>

<p align="right">(<a href="#readme-top">back to top</a>)</p>


### File Structure
Here is the file structure of this repository
```
. 
├── index.php
├── style.css
├── home.png
└── README.md
```
<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- GETTING STARTED -->
### Get-started
1. Clone the repo
  ```sh
   git clone https://github.com/Dhaboav/personal-library.git
  ```

2. Create database library in MySQL
  ```Prompt
  CREATE DATABASE library;
  ```

3. Create table book in database library
  ```Prompt
  CREATE TABLE book (
    id int (11) PRIMARY KEY,
    title varchar(200),
    writer varchar(50)
  );
  ```

5. Run in your localhost
  ```localhost
   http://localhost/personal-library/index.php
  ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>
