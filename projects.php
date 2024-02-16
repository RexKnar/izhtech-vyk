<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>VYK Networks LLC | Your Telecom Partner</title>
  <!-- Stylesheets -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="./css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!-- Color Switcher Mockup -->
  <link href="css/color-switcher-design.css" rel="stylesheet">

  <!-- Color Themes -->
  <link id="theme-color-file" href="css/color-themes/default-color.css" rel="stylesheet">

  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900;9..40,1000&amp;display=swap"
    rel="stylesheet">

  <link rel="shortcut icon" href="./images/Logo/vyklogo-01.png" type="image/x-icon">
  <link rel="icon" href="./images/Logo/vyklogo-01.png" type="image/x-icon">

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>
  <?php


  $projects =
    [
      array(
        "project" => "MOTROLLA",
        "logo" => "./images/resource/Motrola.png",
        "title" => "Drive test services",
        "period" => "2021 - ONGOING",
        "description" => [
          ["title" => 'Country', 'value' => ' Oman'],
          ["title" => 'Account', 'value' => ' Motorolla'],
          ["title" => 'Operator', 'value' => ' ROP,  Structured cabling and installation of Workstations']
        ]
      ),
      array(
        "project" => "MOTROLLA",
        "logo" => "./images/resource/Motrola.png",
        "title" => "Civil Construction and FOC Installation",
        "period" => "2021 October – 2021 December",
        "description" => [
          ["title" => 'Country', 'value' => ' Oman'],
          ["title" => 'Account', 'value' => ' Motorolla'],
          ["title" => 'Operator', 'value' => 'ROP and SQU, Civil Work and FOC installation']
        ]
      ),
      array(
        "project" => "MOTROLLA",
        "logo" => "./images/resource/Motrola.png",
        "title" => "Workstation Commissioning Project",
        "period" => "2021 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => ' Oman'],
          ["title" => 'Account', 'value' => ' Motorolla'],
          ["title" => 'Operator', 'value' => '  ROP,  Structured cabling and installation of Workstations']
        ]
      ),
      array(
        "project" => "MOTROLLA",
        "logo" => "./images/resource/Motrolla.png",
        "title" => "ROP Etisalat Project",
        "period" => "2019-Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => 'Oman'],
          ["title" => 'Account', 'value' => 'Motrolla'],
          ["title" => 'Operator', 'value' => 'Oman, ROP Etisalat Project']
        ]
      ),
      array(
        "project" => "MOTROLLA",
        "logo" => "./images/resource/Motrolla.png",
        "title" => "Stage - 01: SBP( Site Build Pack)+LOS + Civil work validation Survey",
        "period" => "2016 to On Going",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Motrolla/Rop'],
          ["title" => 'Country', 'value' => 'SBP + LOS and Site Survey']
        ]
      ),
      array(
        "project" => "MOTROLLA",
        "logo" => "./images/resource/Motrolla.png",
        "title" => "Stage - 2 : CME and TI supply and Installation work (Civil Construction of Tower Work + Telecom Supply and Installation Work)",
        "period" => "2016 to On Going",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Motrolla/Rop'],
          ["title" => 'Country', 'value' => 'CME(Civil+Mechanical + Electrical) and Telecom Materials Supply Work']
        ]
      ),
      array(
        "project" => "MOTROLLA",
        "logo" => "./images/resource/Motrolla.png",
        "title" => "Maintenance Work (CME and Telecom work)",
        "period" => "2016 to On Going",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Motrolla/Rop'],
          ["title" => 'Country', 'value' => 'CME(Civil+Mechanical + Electrical) and Telecom Materials Supply Work']
        ]
      ),
      array(
        "project" => "MOTROLLA",
        "logo" => "./images/resource/Motrolla.png",
        "title" => "Drive Test",
        "period" => "2016 to On Going",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Motrolla/Rop'],
          ["title" => 'Country', 'value' => 'Drive test for indoor & outdoor equipments']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "Ericsson RBS Service",
        "period" => "2014 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel'],
          ["title" => 'Country', 'value' => 'Installation and commissioning of RBS and antenna for SRAN/LTE FDD/ LTE TDD/ 5G']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => ".ericsionimg",
        "title" => "Ericsson MW Service",
        "period" => "2014 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel'],
          ["title" => 'Country', 'value' => 'Includes site survey/Engineering, installation of MW indoor and outdoor unit, LOS verification, Testing commisioning and integration of MW indoor and outdoor system.']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "Drive Test Services",
        "period" => "2012 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel & Ooredoo'],
          ["title" => 'Country', 'value' => 'Supply of resource with dedicated car and tools for drive test for Ericsson.']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "Ericsson O&M Rigger service",
        "period" => "2016 - 2018",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel'],
          ["title" => 'Country', 'value' => 'Supply of resource with dedicated car for O&M services across all part of Oman.']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "Drive Test Services",
        "period" => "2012-Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel & Ooredoo'],
          ["title" => 'Country', 'value' => 'Supply of resource with dedicated car and tools for drive test for Ericsson.']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "CW & TI",
        "period" => "2013-2014",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel & Ooredoo'],
          ["title" => 'Country', 'value' => 'Service Offerings Network Deployment']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "Implementation services - Frame Agreement",
        "period" => "2013-2014",
        "description" => [
          ["title" => 'Country', 'value' => "Middle East"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel & Ooredoo'],
          ["title" => 'Country', 'value' => 'Service Offerings Mw Projects']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "TI/MW",
        "period" => "2011-2012",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Ooredoo'],
          ["title" => 'Country', 'value' => 'Service Offerings Network Deployment']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "CW & TI",
        "period" => "2011-2012",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel'],
          ["title" => 'Country', 'value' => 'Service Offerings Network Deployment']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "TI/MW",
        "period" => "2011-2012",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel'],
          ["title" => 'Country', 'value' => 'Service Offerings Network Deployment']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "Resource Supply",
        "period" => "2011-2012",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => ' Ooredoo'],
          ["title" => 'Country', 'value' => 'Service Offerings Network Deployment']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "Resource Supply",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => ' Ooredoo'],
          ["title" => 'Country', 'value' => 'Service Offerings Network Deployment']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "Resource Supply",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => ' Ooredoo'],
          ["title" => 'Country', 'value' => 'Service Offerings Professional Services']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "TI",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel'],
          ["title" => 'Country', 'value' => 'Service Offerings Network Deployment Services']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "TI",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel'],
          ["title" => 'Country', 'value' => 'Service Offerings Network Deployment']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "O & M",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Nawras'],
          ["title" => 'Country', 'value' => 'Service Offerings Professional Services']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "CW & TI",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Nawras'],
          ["title" => 'Country', 'value' => 'Service Offerings Network Deployment']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "Installation /alignment &commissioning of M/w link",
        "period" => "2009-2010",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel'],
          ["title" => 'Country', 'value' => 'Service Offerings Network Deployment']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "Telecom Installation and commissioning /Mw ,Drive test/los/traffic Node",
        "period" => "2009-2010",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Nawras'],
          ["title" => 'Country', 'value' => 'Service Offerings Professional Services']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "Ericsson SRAN & MW Project",
        "period" => "2014-2015",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel'],
          ["title" => 'Country', 'value' => 'Service Offerings Installation & Commissioning of microwave links, SRAN.']
        ]
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "ericsionimg",
        "title" => "Ericsson SRAN & MW Project",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'MOD'],
          ["title" => 'Country', 'value' => 'Service Offerings Building of new telecom sites, Construction of tower foundation, shelter foundation, erection of tower. Installation & Commissioning of microwave links, Installation of solar power system.']
        ]
      ),
      array(
        "project" => "OMANTEL",
        "logo" => "omantelimg",
        "title" => "Design , Supply & Installation of Telecom Towers",
        "period" => "2019-Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Omantel'],
          ["title" => 'Operator', 'value' => 'Omantel'],
          ["title" => 'Country', 'value' => 'Design , Supply & Installation of Telecom Towers and Construction of Boundary Walls & Chanilink fencing with Allied works- Oil Filed area.']
        ]
      ),
      array(
        "project" => "OMANTEL",
        "logo" => "omantelimg",
        "title" => "Boundary Walls & Chanilink fencing with Allied works",
        "period" => "2016-2018",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Omantel'],
          ["title" => 'Operator', 'value' => 'Omantel'],
          ["title" => 'Country', 'value' => 'Design , Supply & Installation of Telecom Towers and Construction of Boundary Walls & Chanilink fencing with Allied works at Various Omantel sites in the Sultanate of Oman.']
        ]
      ),
      array(
        "project" => "OMANTEL",
        "logo" => "omantelimg",
        "title" => "Security Fencing for GRDU",
        "period" => "2016-2017",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Omantel'],
          ["title" => 'Operator', 'value' => 'Omantel'],
          ["title" => 'Country', 'value' => 'Design , Supply & Installation of Security Fencing for GRDU at Various Omantel Sites.']
        ]
      ),
      array(
        "project" => "OMANTEL",
        "logo" => "omantelimg",
        "title" => "General Civil Works Maintenance",
        "period" => "2015-2016",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Omantel'],
          ["title" => 'Operator', 'value' => 'Omantel, General Civil Works Maintenance at various Omantel Sites in the Sultanate of Oman.']
        ]
      ),
      array(
        "project" => "OMANTEL",
        "logo" => "omantelimg",
        "title" => "OMANTEL 500 Sites & USO Project",
        "period" => "2014-2015",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Omantel'],
          ["title" => 'Operator', 'value' => 'Omantel, Building of new telecom sites, Construction of tower foundation, shelter foundation, erection of tower. Installation & Commissioning of 2G, 3G LTE.']
        ]
      ),
      array(
        "project" => "OTC",
        "logo" => "otcimg",
        "title" => "Design, Supply and Installation of Power Supply",
        "period" => "2021 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'OTC'],
          ["title" => 'Operator', 'value' => 'OTC, Maintenance of Telecom Towers']
        ]
      ),
      array(
        "project" => "OTC",
        "logo" => "otcimg",
        "title" => "Maintenance of Telecom Tower and Power Infrastructure",
        "period" => "2020 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Oman Towers'],
          ["title" => 'Operator', 'value' => 'Oman Towers, Tower Construction and Power connection']
        ]
      ),
      array(
        "project" => "OTC",
        "logo" => "otcimg",
        "title" => "Turnkey Rooftop Site Supply and Construction",
        "period" => "2018 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Operator/Consultant', 'value' => 'VODFONE / OOREDOO/ OMANTEL, Special towers camouflage structures/ Moziaque towers'],
        ]
      ),
      array(
        "project" => "OTC",
        "logo" => "otcimg",
        "title" => "Structure, Monopoly, Supply, and Interaction",
        "period" => "2018 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Operator/Consultant', 'value' => 'VODFONE / OOREDOO/ OMANTEL, Special towers camouflage structures/ Moziaque towers'],
        ]
      ),
      array(
        "project" => "OTC",
        "logo" => "otcimg",
        "title" => "Maintenance of Telecom Tower Sites",
        "period" => "2021 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Operator/Consultant', 'value' => 'VODFONE / OOREDOO/ OMANTEL, Existing tower maintenance'],
        ]
      ),
      array(
        "project" => "PDO",
        "logo" => "pdoimg",
        "title" => "Telecom Service - HP Wells",
        "period" => "2020 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'PDO'],
          ["title" => 'Operator', 'value' => 'PDO, Installation, Blowing and termination of FOC']
        ]
      ),
      array(
        "project" => "PDO",
        "logo" => "pdoimg",
        "title" => "Supply of EXFO OLTS Test Unit",
        "period" => "2020",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'PDO'],
          ["title" => 'Operator', 'value' => 'PDO, Supply of EXFO OLTS Test Unit for PDO']
        ]
      ),
      array(
        "project" => "PDO",
        "logo" => "pdoimg",
        "title" => "FOC Installation, Configuration, Testing and Commissioning",
        "period" => "2022",
        "description" => [
          ["title" => 'Client', 'value' => "PDO, IT/ TELECOMMUNICATION/ ICT"]
        ]
      ),
      array(
        "project" => "PDO",
        "logo" => "pdoimg",
        "title" => "Supply of EXFO OLTS MAX 945",
        "period" => "2022",
        "description" => [
          ["title" => 'Client', 'value' => "PDO, IT/ TELECOMMUNICATION/ ICT"]
        ]
      ),
      array(
        "project" => "PDO",
        "logo" => "pdoimg",
        "title" => "DHULIMA - CCTV , FOC Integration Project",
        "period" => "2023",
        "description" => [
          ["title" => 'Client', 'value' => "PDO, IT/ TELECOMMUNICATION/ ICT"]
        ]
      ),
      array(
        "project" => "PDO",
        "logo" => "pdoimg",
        "title" => "FAAL -LEK",
        "period" => "2023",
        "description" => [
          ["title" => 'Client', 'value' => "PDO, IT/ TELECOMMUNICATION/ ICT"]
        ]
      ),
      array(
        "project" => "PDO",
        "logo" => "pdoimg",
        "title" => "Supply, Installation and Configuration complete ELV systems(CCTV, WIFI, Data, Analog Telephony, Networking, PABGM AMAL)",
        "period" => "2023",
        "description" => [
          ["title" => 'Client', 'value' => "PDO, IT/ TELECOMMUNICATION/ ICT"]
        ]
      ),
      array(
        "project" => "OOREDOO",
        "logo" => "ooredooimg",
        "title" => "Supply of OSP/FOC",
        "period" => "2014-2020",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Ooredoo, Supply of OSP and FOC for Ooredoo projects']
        ]
      ),
      array(
        "project" => "OOREDOO",
        "logo" => "ooredooimg",
        "title" => "MW Linking at business sites",
        "period" => "2014-2020",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Ooredoo, Microwave Linking at different business sites for ooredoo']
        ]
      ),
      array(
        "project" => "OOREDOO",
        "logo" => "ooredooimg",
        "title" => "MW Link - LOS/ Transmission Work/ LTE",
        "period" => "2014-2020",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Ooredoo, MW Link, LOS transmission works, LTE FDD works for the new ooredoo sites.']
        ]
      ),
      array(
        "project" => "OOREDOO",
        "logo" => "ooredooimg",
        "title" => "Supply of OSP/FOC Consultant
        ",
        "period" => "2014-2020",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Ooredoo, MW Link, LOS transmission works, LTE FDD works for the new ooredoo sites.']
        ]
      ),
    ];

  $projects = $projects;

  ?>
  <div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- End Preloader -->

    <!-- Main Header / Style Three -->
    <header class="main-header header-style-two">

      <!-- Header Top -->
      <div class="header-top">
        <div class="px-0 auto-container ps-3 mw-100">
          <div class="inner-container">
            <div class="flex-wrap d-flex justify-content-between">
              <ul class="header-list">
                <li><span class="icon fas fa-clock fa-fw"></span>Mon - Sat: 8:00am - 6:00pm</li>
                <li><span class="icon fas fa-envelope fa-fw"></span><a
                    href="mailto:needhelp@company.com">info@vyknetworkllc.com</a></li>
              </ul>
              <div class="flex-wrap right-box d-flex align-items-center">

                <!-- Social Box -->
                <div class="header-social_box">
                  <a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                  <a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                  <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Header Lower -->
      <div class="header-lower">
        <div class="auto-container">
          <div class="inner-container d-flex align-items-center justify-content-between">

            <!-- Logo Box -->
            <div class="logo-box d-flex align-items-center">
              <div class="logo"><a href="index.html"><img class="header-logo" src="images/Logo/vyklogo-01.png" alt="" title=""></a>
              </div>
            </div>

            <div class="nav-outer d-flex align-items-center">

              <!-- Main Menu -->
              <nav class="main-menu show navbar-expand-md">
                <div class="navbar-header">
                  <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <div class="clearfix navbar-collapse collapse" id="navbarSupportedContent">
                  <ul class="clearfix navigation">
                    <li><a href="./index.html">Home</a></li>
                    <li><a href="./about.html">About Us</a></li>
                    <li><a href="./services.html">Services</a></li>
                    <li><a href="./product.html">Product</a></li>
                    <li><a href="./projects.html">Projects</a></li>
                    <li><a href="./gallery.html">Gallery</a></li>
                    <li><a href="./contact.html">Contact</a></li>
                  </ul>
                </div>
              </nav>
              <!-- Main Menu End-->
            </div>

            <!-- Outer Box -->
            <div class="outer-box d-flex align-items-center">

              <!-- Mobile Navigation Toggler -->
              <div class="mobile-nav-toggler"><span class="icon"><img src="images/icons/menu.png" alt="" /></span></div>

            </div>
            <!-- End Outer Box -->

          </div>

        </div>
      </div>
      <!-- End Header Lower -->

      <!-- Mobile Menu  -->
      <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon far fa-times fa-fw"></span></div>
        <nav class="menu-box">
          <div class="nav-logo"><a href="index-2.html"><img src="images/Logo/vyklogo-01.png" alt="" title=""></a></div>
          <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
          </div>
        </nav>
      </div>
      <!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!-- Page Title -->
    <section class="page-title_two" style="background-image:url(./images/T-4.jpg)">
      <div class="page-title_two-gradient" style="background-image:url(images/background/pattern-10.png)"></div>
      <div class="auto-container">
        <h2>Our Projects</h2>
        <ul class="clearfix bread-crumb">
          <li><a href="index.html">Home</a></li>
          <li>Projects</li>
        </ul>
      </div>
    </section>
    <!-- End Page Title -->

    <section class="projects-one">
      <div class="auto-container">

        <div class="pt-5 pb-5 btn-group btn-group-justified filter-button-group" role="group" aria-label="filterImages">
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter=".MOTROLLA">MOTROLLA</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default" data-filter=".ERICSSON">ERICSSON</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default" data-filter=".OMANTEL">OMANTEL</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter="OTC">OTC</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default" data-filter=".PDO">PDO</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default" data-filter=".OOREDOO">OOREDOO</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter=".HUAWEI">HUAWEI</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter=".NSN">NSN</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter=".SIEMENS">SIEMENS</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter=".ROP / RAFO">ROP /
              RAFO</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter=".FIBER OPTICS">FIBER
              OPTICS</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter=".ICT">
              ICT</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter=".HELIOS">HELIOS</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter=".MEP">MEP</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter=".VODAFONE">VODAFONE</button>
          </div>

        </div>
        <!--filtering-->
        <div class="grid">
          <div class="grid-sizer">
            <?php foreach ($projects as $project) {
              // print_r($project);
              ?>
              <div class="col-xs-12 col-sm-6 col-md-6 grid-item ">
                <div class="gallery-block_one-inner gallery-height">
                  <div class="gallery-block_one-overlay">
                  </div>
                  <div style="display: flex;">
                    <img src="./images/resource/Motrola.png" alt="Avatar" style="width:25%; height:auto">
                    <div>
                      <h5 class="gallery-block_one-heading"><b>
                          <?php echo $project['title']; ?>
                        </b></h5>
                      <h5 class="gallery-block_one-heading">
                        <?php echo $project['period']; ?>
                      </h5>
                    </div>
                  </div>
                  <div class="p-3 m-0 text-justify gallery-block_one-heading fw-normal fs-6 split-in-left">
                    <ul>
                      <?php foreach ($project['description'] as $description) {
                        echo "<li><b>" . $description['title'] . '</b>';
                        echo $description['title'] ? " : " : '';
                        echo $description['value'] . "</li>";
                      } ?>
                    </ul>
                  </div>
                </div>

              </div>

            <?php } ?>
          </div>
        </div>
      </div>
    </section>

    <!-- partial -->
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <script src='https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js'></script>
    <script src='https://cdn.jsdelivr.net/prettyphoto/3.1.6/js/jquery.prettyPhoto.js'></script>
    <script src="./js/Project.js"></script>

    <!-- Main Footer / Style Three -->
    <footer class="main-footer style-three" style="background-color: #4c4c4c;">
      <div class="auto-container">
        <div class="inner-container">
          <!-- Widgets Section -->
          <div class="widgets-section">
            <div class="clearfix row">

              <!-- Big Column -->
              <div class="big-column col-lg-12 col-md-12 col-sm-12">
                <div class="clearfix row justify-content-center">

                  <!-- Footer Column -->
                  <div class="mx-auto footer_column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget contact-widget">
                      <h5 class="footer-title">VYK Network LLC</h5>
                      <ul class="footer-contact_list">
                        <li><span class="icon fas fa-map-marker-alt fa-fw"></span>
                          AHCL Ansal Town,<br>Indore,
                          India.</li>
                        <li><span class="icon fas fa-envelope fa-fw"></span>info@vyknetwork.com
                        </li>
                        <li><span class="icon fas fa-phone fa-fw"></span>+91 9131755703</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Footer Column -->
                  <div class="mx-auto footer_column col-lg-4 col-md-6 col-sm-12">
                    <div class="footer-widget contact-widget">
                      <h5 class="footer-title">WE Netwok LLC</h5>
                      <ul class="footer-contact_list">
                        <li><span class="icon fas fa-map-marker-alt fa-fw"></span>First floor,
                          0401-Z-319-KOM-4,<br>
                          Knowledge Oasis Muscat,<br>PO BOX: 1641, Postal Code: 114,<br>Al
                          Rusayl, Muscat, Sultanate of Oman</li>
                        <li><span class="icon fas fa-envelope fa-fw"></span>info@wenetworkllc.com
                        </li>
                        <li><span class="icon fas fa-phone fa-fw"></span>+968 24170030</li>
                      </ul>

                    </div>
                  </div>

                  <!-- Footer Column -->
                  <div class="mx-auto footer_column col-lg-4 col-md-6 col-sm-12">
                    <div class="m-auto footer-widget links-widget">
                      <h5 class="footer-title">Links</h5>
                      <ul class="footer-list">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="product.html">Products</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="contact.html">Contact Us</a></li>

                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="auto-container">
          <div class="main-footer_copyright">Designed by <a href="#">Izh-tech</a></div>
        </div>
      </div>
    </footer>
    <!-- End Footer Style -->


    <!-- End PageWrapper -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-arrow-up fa-fw"></span></div>

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/parallax-scroll.js"></script>
    <script src="js/gsap.min.js"></script>
    <script src="js/SplitText.min.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <script src="js/ScrollToPlugin.min.js"></script>
    <script src="js/ScrollSmoother.min.js"></script>

    <script src="js/slick.js"></script>
    <script src="js/slick-script.js"></script>
    <script src="js/odometer.js"></script>
    <script src="js/parallax-scroll.js"></script>
    <script src="js/nav-tool.js"></script>
    <script src="js/pagenav.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/color-settings.js"></script>
    <script src="js/script.js"></script>

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>



</html>