<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>RiifCreative</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">RiifCreative</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Portofolio</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="container-fluid" style="background-color: #0cafff;">
            <br><br><br><br>
            <div class="container text-center">
                <div class="row">
                  <div class="col">
                    <div class="container text-center">
                        <div class="row justify-content-center">
                          <div class="col-md">
                            <div class="typewriter-container">
                              <span id="typed-text"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col">
                    <img class="gambar-diri" src="{{ asset('img/diri.png') }}" alt="">
                  </div>
                </div>
                <br><br>
        </header>
        <!-- Main Content-->

        <div data-aos="fade-up">
            <div class="row" style="text-align: center; margin-top: 40px;">
                <div class="col-md-6">
                    <img src="{{ asset('img/highlight1.png') }}" alt="Gambar Skill" style="width: 350px;">
                </div>
                <div class="col-md-4 text-center">
                <p>Hai saya Syarif Romadloni, sekarang saya sedang menempuh pendidikan di jurusan Pendidikan Teknik Informatika dan Komputer, di Universitas Negeri Semarang. Saya memiliki keahlian dan kemampuan yang baik dalam bidang design graphics,UI/UX, dan WEB Developer.</p>
                </div>
             </div>
             <br><br>
        </div>
        <div data-aos="fade-down">
            <div class="container text-center">
                <!-- Tombol Pilihan -->
                <div class="btn-group" role="group">
                  <button id="creative-btn" class="btn-skill">Creative</button>
                  <button id="formal-btn" class="btn-skill">Formal Format</button>
                </div>
            
        </div>

        <div data-aos="fade-right">
              <!-- Container untuk Skill -->
    <div id="custom-skill-container" class="custom-skill-container">
        <div class="row">
          <!-- Skill Utama -->
          <div class="col">
            <h4>My Skills</h4>
  
            <div class="skill">
              <span class="skill-label">Design Graphics 99%</span>
              <div class="skill-bar">
                <div class="skill-bar-fill" data-width="99%"></div>
              </div>
            </div>
  
            <div class="skill">
              <span class="skill-label">Web Developer 80%</span>
              <div class="skill-bar">
                <div class="skill-bar-fill" data-width="80%"></div>
              </div>
            </div>
  
            <div class="skill">
              <span class="skill-label">UI/UX Designer 90%</span>
              <div class="skill-bar">
                <div class="skill-bar-fill" data-width="90%"></div>
              </div>
            </div>
          </div>
  
          <!-- Skill Aplikasi -->
          <div class="col">
            <h4 class="">Application Skills</h4>
  
            <div class="skill">
              <span class="skill-label">Adobe Illustrator 90%</span>
              <div class="skill-bar">
                <div class="skill-bar-fill" data-width="90%"></div>
              </div>
            </div>
  
            <div class="skill">
              <span class="skill-label">Adobe Photoshop 85%</span>
              <div class="skill-bar">
                <div class="skill-bar-fill" data-width="85%"></div>
              </div>
            </div>
  
            <div class="skill">
              <span class="skill-label">Adobe Premiere Pro 80%</span>
              <div class="skill-bar">
                <div class="skill-bar-fill" data-width="80%"></div>
              </div>
            </div>
  
            <div class="skill">
              <span class="skill-label">Figma 80%</span>
              <div class="skill-bar">
                <div class="skill-bar-fill" data-width="80%"></div>
              </div>
            </div>
          </div>
        </div>
        <br>

        <div data-aos="fade-down">
 <div class="container">
            <h4 class="">Bahasa Pemrograman</h4>
  
            <div class="skill">
              <span class="skill-label">HTML 95%</span>
              <div class="skill-bar">
                <div class="skill-bar-fill" data-width="95%"></div>
              </div>
            </div>
            <div class="skill">
              <span class="skill-label">CSS 90%</span>
              <div class="skill-bar">
                <div class="skill-bar-fill" data-width="90%"></div>
              </div>
            </div>
            <div class="skill">
              <span class="skill-label">JavaScript 80%</span>
              <div class="skill-bar">
                <div class="skill-bar-fill" data-width="80%"></div>
              </div>
            </div>
            <div class="skill">
              <span class="skill-label">PHP 55%</span>
              <div class="skill-bar">
                <div class="skill-bar-fill" data-width="55%"></div>
              </div>
            </div>
            <div class="skill">
              <span class="skill-label">Java 60%</span>
              <div class="skill-bar">
                <div class="skill-bar-fill" data-width="60%"></div>
              </div>
            </div>

            <div class="skill">
              <span class="skill-label">Flutter 40%</span>
              <div class="skill-bar">
                <div class="skill-bar-fill" data-width="40%"></div>
              </div>
            </div>
        </div>
      </div>
        </div>
       
        </div>
        
        <div data-aos="fade-left">
                <!-- Formal CV Section -->
  <div id="formal-cv-container" class="formal-cv-container">
    <h2 style="color: #0cafff; text-align: center;">CV FORMAL</h2>
    <div class="cv-section">
        <h5>Informasi Pribadi</h5>
        <table class="tabel">
            <tbody>
                <tr>
                    <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">
                        <img src="{{ asset('img/pasfoto.jpg') }}" style="height: 200px; display: flex; align-items: center;" alt="wkwk">
                    </div>
                    
                </tr>
              <tr>
                <th>Nama</th>
                <td>Syarif Romadloni</td>
              </tr>
              <tr>
                <th>Tempat Tanggal Lahir</th>
                <td>20 Oktober 2005</td>
              </tr>
              <tr>
                <th>Agama</th>
                <td>Islam</td>
              </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <td>Laki-laki</td>
              </tr>
            </tbody>
          </table>
      
          <h5>Kontak</h5>
          
          <table class="tabel">
            <tbody>
              <tr class="tabel">
                <th>No HP</th>
                <td>082265171821</td>
              </tr>
              <tr>
                <th>Email</th>
                <td>syarifroma@gmail.com</td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td>Jatirejo, Kanoman, Karangnongko, Klaten</td>
              </tr>
            </tbody>
          </table>

          <h5>Riwayat Pendidikan</h5>
          
          <table class="tabel">
            <tbody>
              <tr>
                <th>SD Negeri 2 Kanoman </th>
                <td>2011-2017</td>
              </tr>
              <tr>
                <th>SMP Negeri 1 Karangnongko</th>
                <td>2017-2020</td>
              </tr>
              <tr>
                <th>SMK Negeri 1 Jogonalan</th>
                <td>2020-2023</td>
              </tr>
              <tr>
                <th>Universitas Negeri Semarang</th>
                <td>2023-2027</td>
              </tr>
            </tbody>
          </table>
          <h5>Skill</h5>
          
          <table class="tabel">
            <tbody>
              <tr>
                    <th>Soft Skills</th>
                    <td>Berkomunikasi dengan baik, Disiplin, Tanggung jawab, Mampu bekerja dalam Tim dan tekanan</td>
                </tr>
              <tr>
                <th>Software </th>
                <td>Adobe Illustrator, Adobe Photoshop, Adobe Premiere Pro, CorelDraw, Canva, Figma, MSOffice</td>
              </tr>
              <tr>
                <th>Bahasa Pemrograman</th>
                <td>HTML, CSS, PHP, JavaScript, Java, C++, Flutter</td>
              </tr>
             
            </tbody>
          </table>
    </div>
    </div>
    </div>
        </div>

        <div data-aos="fade-right">
            <div style="align-items: center; justify-content: center; display: flex;">
                <button class="btn mb-3" style="background-color: #0cafff; border-radius: 5px; color: white" onclick="window.print()">
                    <i class="fas fa-print me-2"></i> Print Page
                </button>
            </div>
        </div>

        

        <!-- Footer-->
        <footer class="py-5" style="background-color: #0cafff;">
            <div class="container">
                <p class="m-0 text-center text-white">&copy; 2024 Riif Creative. All Rights Reserved.</p>
            </div>
        </footer>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
              AOS.init();
        </script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script>
            /*!
* Start Bootstrap - Clean Blog v6.0.8 (https://startbootstrap.com/theme/clean-blog)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-clean-blog/blob/master/LICENSE)
*/
window.addEventListener('DOMContentLoaded', () => {
    let scrollPos = 0;
    const mainNav = document.getElementById('mainNav');
    const headerHeight = mainNav.clientHeight;
    window.addEventListener('scroll', function() {
        const currentTop = document.body.getBoundingClientRect().top * -1;
        if ( currentTop < scrollPos) {
            // Scrolling Up
            if (currentTop > 0 && mainNav.classList.contains('is-fixed')) {
                mainNav.classList.add('is-visible');
            } else {
                console.log(123);
                mainNav.classList.remove('is-visible', 'is-fixed');
            }
        } else {
            // Scrolling Down
            mainNav.classList.remove(['is-visible']);
            if (currentTop > headerHeight && !mainNav.classList.contains('is-fixed')) {
                mainNav.classList.add('is-fixed');
            }
        }
        scrollPos = currentTop;
    });
})

var options = {
    strings: ["Syarif Romadloni", "UI/UX Design", "Graphics Design", "Web Developer"],
    typeSpeed: 60,        // Kecepatan mengetik (ms)
    backSpeed: 40,        // Kecepatan menghapus (ms)
    backDelay: 2000,      // Waktu jeda sebelum menghapus (ms)
    startDelay: 1000,     // Waktu jeda awal (ms)
    loop: true            // Looping animasi
  };

  var typed = new Typed("#typed-text", options);



 // Tombol Creative
 document.getElementById('creative-btn').addEventListener('click', function () {
    const skillContainer = document.getElementById('custom-skill-container');
    const cvContainer = document.getElementById('formal-cv-container');
    
    // Tampilkan skill, sembunyikan CV formal
    skillContainer.style.display = 'block';
    cvContainer.style.display = 'none';

    // Animasi persentase pada setiap skill bar
    const skillBars = document.querySelectorAll('.skill-bar-fill');
    skillBars.forEach(bar => {
      const width = bar.getAttribute('data-width');
      bar.style.width = width; // Set width dengan animasi
    });
  });

  // Tombol Formal Format
  document.getElementById('formal-btn').addEventListener('click', function () {
    const skillContainer = document.getElementById('custom-skill-container');
    const cvContainer = document.getElementById('formal-cv-container');
    
    // Tampilkan CV formal, sembunyikan skill
    skillContainer.style.display = 'none';
    cvContainer.style.display = 'block';
  });


        </script>
        
    </body>
</html>
