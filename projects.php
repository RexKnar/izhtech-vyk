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
        "logo" => "images/resource/Motrola.png",
        "title" => "Drive test services",
        "period" => "2021 - ONGOING",
        "description" => [
          ["title" => 'Country', 'value' => ' Oman'],
          ["title" => 'Account', 'value' => ' Motorolla'],
          ["title" => 'Operator', 'value' => ' ROP']
        ],
        "data" => "Structured cabling and installation of Workstations"
      ),
      array(
        "project" => "MOTROLLA",
        "logo" => "images/resource/Motrola.png",
        "title" => "Civil Construction and FOC Installation",
        "period" => "2021 October – 2021 December",
        "description" => [
          ["title" => 'Country', 'value' => ' Oman'],
          ["title" => 'Account', 'value' => ' Motorolla'],
          ["title" => 'Operator', 'value' => 'ROP and SQU']
        ],
        "data" => "Civil Work and FOC installation"
      ),
      array(
        "project" => "MOTROLLA",
        "logo" => "images/resource/Motrola.png",
        "title" => "Workstation Commissioning Project",
        "period" => "2021 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => ' Oman'],
          ["title" => 'Account', 'value' => ' Motorolla'],
          ["title" => 'Operator', 'value' => '  ROP']
        ],
        "data" => "Structured cabling and installation of Workstations"
      ),
      array(
        "project" => "MOTROLLA",
        "logo" => "images/resource/Motrola.png",
        "title" => "ROP Etisalat Project",
        "period" => "2019-Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => 'Oman'],
          ["title" => 'Account', 'value' => 'Motrolla'],
          ["title" => 'Operator', 'value' => 'Oman,']
        ],
        "data" => "ROP Etisalat Project"
      ),
      array(
        "project" => "MOTROLLA",
        "logo" => "images/resource/Motrola.png",
        "title" => "Stage - 01: SBP( Site Build Pack)+LOS + Civil work validation Survey",
        "period" => "2016 to On Going",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Motrolla/Rop']
        ],
        "data" => "SBP + LOS and Site Survey"
      ),
      array(
        "project" => "MOTROLLA",
        "logo" => "images/resource/Motrola.png",
        "title" => "Stage - 2 : CME and TI supply and Installation work (Civil Construction of Tower Work + Telecom Supply and Installation Work)",
        "period" => "2016 to On Going",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Motrolla/Rop'],
        ],
        "data" => "CME(Civil+Mechanical + Electrical) and Telecom Materials Supply Work"
      ),
      array(
        "project" => "MOTROLLA",
        "logo" => "images/resource/Motrola.png",
        "title" => "Maintenance Work (CME and Telecom work)",
        "period" => "2016 to On Going",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Motrolla/Rop'],
        ],
        "data" => "CME(Civil+Mechanical + Electrical) and Telecom Materials Supply Work"
      ),
      array(
        "project" => "MOTROLLA",
        "logo" => "images/resource/Motrola.png",
        "title" => "Drive Test",
        "period" => "2016 to On Going",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Motrolla/Rop']
        ],
        "data" => "Drive test for indoor & outdoor equipments"
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "Ericsson RBS Service",
        "period" => "2014 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel']
        ],
        "data" => 'Installation and commissioning of RBS and antenna for SRAN/LTE FDD/ LTE TDD/ 5G'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "Ericsson MW Service",
        "period" => "2014 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel']
        ],
        "data" => 'Includes site survey/Engineering, installation of MW indoor and outdoor unit, LOS verification, Testing commisioning and integration of MW indoor and outdoor system.'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "Drive Test Services",
        "period" => "2012 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel & Ooredoo']
        ],
        "data" => 'Supply of resource with dedicated car and tools for drive test for Ericsson.'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "Ericsson O&M Rigger service",
        "period" => "2016 - 2018",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel']
        ],
        "data" => 'Supply of resource with dedicated car for O&M services across all part of Oman.'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "Drive Test Services",
        "period" => "2012-Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel & Ooredoo']
        ],
        "data" => 'Supply of resource with dedicated car and tools for drive test for Ericsson.'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "CW & TI",
        "period" => "2013-2014",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel & Ooredoo']
        ],
        "data" => 'Service Offerings Network Deployment'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "Implementation services - Frame Agreement",
        "period" => "2013-2014",
        "description" => [
          ["title" => 'Country', 'value' => "Middle East"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel & Ooredoo']
        ],
        "data" => 'Service Offerings Mw Projects'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "TI/MW",
        "period" => "2011-2012",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Ooredoo']
        ],
        "data" => 'Service Offerings Network Deployment'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "CW & TI",
        "period" => "2011-2012",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel']
        ],
        "data" => 'Service Offerings Network Deployment'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "TI/MW",
        "period" => "2011-2012",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel']
        ],
        "data" => 'Service Offerings Network Deployment'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "Resource Supply",
        "period" => "2011-2012",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => ' Ooredoo']
        ],
        "data" => 'Service Offerings Network Deployment'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "Resource Supply",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => ' Ooredoo']
        ],
        "data" => 'Service Offerings Network Deployment'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "Resource Supply",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => ' Ooredoo']
        ],
        "data" => 'Service Offerings Professional Services'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "TI",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel']
        ],
        "data" => 'Service Offerings Network Deployment Services'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "TI",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel']
        ],
        "data" => 'Service Offerings Network Deployment'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "O & M",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Nawras']
        ],
        "data" => 'Service Offerings Professional Services'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "CW & TI",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Nawras']
        ],
        "data" => 'Service Offerings Network Deployment'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "Installation /alignment &commissioning of M/w link",
        "period" => "2009-2010",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel']
        ],
        "data" => 'Service Offerings Network Deployment'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "Telecom Installation and commissioning /Mw ,Drive test/los/traffic Node",
        "period" => "2009-2010",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Nawras']
        ],
        "data" => 'Service Offerings Professional Services'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "Ericsson SRAN & MW Project",
        "period" => "2014-2015",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'Omantel']
        ],
        "data" => 'Service Offerings Installation & Commissioning of microwave links, SRAN.'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "Ericsson CIVIL WORKS Project",
        "period" => "",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Main Contractor', 'value' => 'Ericsson'],
          ["title" => 'End Customer', 'value' => 'MOD']
        ],
        "data" => 'Service Offerings Building of new telecom sites, Construction of tower foundation, shelter foundation, erection of tower. Installation & Commissioning of microwave links, Installation of solar power system.'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "RF & LOS survey",
        "period" => 'Omantel-From 2012, Vodafone-From 2020',
        "description" => [
          ["title" => 'Operator/Consultant:', 'value' => "Oman, Omantel & Vodafone"]
        ],
        "data" => 'TTSR & LOS survey for new and existing towers for both Ericsson client.'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "RAN Instatallation",
        "period" => 'Omantel-From 2012, Vodafone-From 2020',
        "description" => [
          ["title" => 'Operator/Consultant:', 'value' => "Oman, Omantel & Vodafone"]
        ],
        "data" => 'Implementation and integration of 2g,3g,4g and 5g networks all over Oman.'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "MW installation",
        "period" => 'Omantel-From 2012, Vodafone-From 2020',
        "description" => [
          ["title" => 'Operator/Consultant:', 'value' => "Oman, Omantel & Vodafone"]
        ],
        "data" => 'Implementation and integration of different MW links'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "DRIVE TEST",
        "period" => 'From 2012',
        "description" => [
          ["title" => 'Operator/Consultant:', 'value' => "Omantel"]
        ],
        "data" => 'Drive test for indoor & outdoor equipments.'
      ),
      array(
        "project" => "ERICSSON",
        "logo" => "images/clients/Ericsson.png",
        "title" => "IBS installation",
        "period" => 'From 2020',
        "description" => [
          ["title" => 'Operator/Consultant:', 'value' => "Vodafone"]
        ],
        "data" => 'IBS installation of telecom equipments.'
      ),
      array(
        "project" => "OMANTEL",
        "logo" => "images/clients/19_files/Omantel.png",
        "title" => "Design , Supply & Installation of Telecom Towers",
        "period" => "2019-Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Omantel'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => 'Design , Supply & Installation of Telecom Towers and Construction of Boundary Walls & Chanilink fencing with Allied works- Oil Filed area.'
      ),
      array(
        "project" => "OMANTEL",
        "logo" => "images/clients/19_files/Omantel.png",
        "title" => "Boundary Walls & Chanilink fencing with Allied works",
        "period" => "2016-2018",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Omantel'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => 'Design , Supply & Installation of Telecom Towers and Construction of Boundary Walls & Chanilink fencing with Allied works at Various Omantel sites in the Sultanate of Oman.'
      ),
      array(
        "project" => "OMANTEL",
        "logo" => "images/clients/19_files/Omantel.png",
        "title" => "Security Fencing for GRDU",
        "period" => "2016-2017",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Omantel'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => 'Design , Supply & Installation of Security Fencing for GRDU at Various Omantel Sites.'
      ),
      array(
        "project" => "OMANTEL",
        "logo" => "images/clients/19_files/Omantel.png",
        "title" => "General Civil Works Maintenance",
        "period" => "2015-2016",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Omantel'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => "General Civil Works Maintenance at various Omantel Sites in the Sultanate of Oman."
      ),
      array(
        "project" => "OMANTEL",
        "logo" => "images/clients/19_files/Omantel.png",
        "title" => "OMANTEL 500 Sites & USO Project",
        "period" => "2014-2015",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Omantel'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => "Building of new telecom sites, Construction of tower foundation, shelter foundation, erection of tower. Installation & Commissioning of 2G, 3G LTE."
      ),
      array(
        "project" => "OMANTEL",
        "logo" => "images/clients/19_files/Omantel.png",
        "title" => "OMANTEL FRAME AGREEMENT GENERAL CIVIL MAINTANENCE Project",
        "period" => "2014-2015",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'OTP'],
          ["title" => 'Operator', 'value' => 'OTP']
        ],
        "data" => "Maintenance and repairing of existing GSM sites & telecom Exchanges."
      ),

      array(
        "project" => "OMANTEL",
        "logo" => "images/clients/19_files/Omantel.png",
        "title" => "TI /CW",
        "period" => "2013-2014",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Omantel'],
          ["title" => 'Operator', 'value' => 'Ericsson']
        ],
        "data" => "Service Offerings Network Deployment"
      ),
      array(
        "project" => "OMANTEL",
        "logo" => "images/clients/19_files/Omantel.png",
        "title" => "TI /CW",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Omantel'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => "Service Offerings Network Deployment"
      ),
      array(
        "project" => "OMANTEL",
        "logo" => "images/clients/19_files/Omantel.png",
        "title" => "TI",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Omantel'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => "Service Offerings Network Deployment"
      ),
      array(
        "project" => "OTC",
        "logo" => "images/clients/19_files/OTC.png",
        "title" => "Design, Supply and Installation of Power Supply",
        "period" => "2021 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'OTC'],
          ["title" => 'Operator', 'value' => 'OTC']
        ],
        "data" => "Maintenance of Telecom Towers"
      ),
      array(
        "project" => "OTC",
        "logo" => "images/clients/19_files/OTC.png",
        "title" => "Maintenance of Telecom Tower and Power Infrastructure",
        "period" => "2020 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Oman Towers'],
          ["title" => 'Operator', 'value' => 'Oman Towers']
        ],
        "data" => "Tower Construction and Power connection"
      ),
      array(
        "project" => "OTC",
        "logo" => "images/clients/19_files/OTC.png",
        "title" => "Turnkey Rooftop Site Supply and Construction",
        "period" => "2018 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Operator/Consultant', 'value' => 'VODFONE / OOREDOO/ OMANTEL'],
        ],
        "data" => "Special towers camouflage structures/ Moziaque towers"
      ),
      array(
        "project" => "OTC",
        "logo" => "images/clients/19_files/OTC.png",
        "title" => "Structure, Monopoly, Supply, and Interaction",
        "period" => "2018 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Operator/Consultant', 'value' => 'VODFONE / OOREDOO/ OMANTEL'],
        ],
        "data" => "Special towers camouflage structures/ Moziaque towers"
      ),
      array(
        "project" => "OTC",
        "logo" => "images/clients/19_files/OTC.png",
        "title" => "Maintenance of Telecom Tower Sites",
        "period" => "2021 - Ongoing",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'VODFONE / OOREDOO/ OMANTEL'],
        ],
        "data" => "Existing tower maintenance"
      ),
      array(
        "project" => "OTC",
        "logo" => "images/clients/19_files/OTC.png",
        "title" => "Emergency Power Alarm Intervention",
        "period" => "2022 - Ongoing",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'VODFONE / OOREDOO/ OMANTEL'],
        ],
        "data" => "Introduce new technology"
      ),
      array(
        "project" => "OTC",
        "logo" => "images/clients/19_files/OTC.png",
        "title" => "Supply of Turnkey Tower Sites",
        "period" => "2022 - Ongoing",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'OTC/ VODFONE / OOREDOO/ OMANTEL'],
        ],
        "data" => "Supply and delivery of towers/ Monopole structures and camouflage"
      ),
      array(
        "project" => "OTC",
        "logo" => "images/clients/19_files/OTC.png",
        "title" => "Supply & Installation of towers & power systems for MOD maritime Project  ",
        "period" => "2022 - Ongoing",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'OTC/ MOD'],
        ],
        "data" => "Monopole structures and camouflage"
      ),
      array(
        "project" => "PDO",
        "logo" => "images/clients/19_files/PDO.png",
        "title" => "Telecom Service - HP Wells",
        "period" => "2020 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'PDO'],
          ["title" => 'Operator', 'value' => 'PDO']
        ],
        "data" => "Installation, Blowing and termination of FOC"
      ),
      array(
        "project" => "PDO",
        "logo" => "images/clients/19_files/PDO.png",
        "title" => "Supply of EXFO OLTS Test Unit",
        "period" => "2020",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'PDO'],
          ["title" => 'Operator', 'value' => 'PDO']
        ],
        "data" => "Supply of EXFO OLTS Test Unit for PDO"
      ),
      array(
        "project" => "PDO",
        "logo" => "images/clients/19_files/PDO.png",
        "title" => "FOC Installation, Configuration, Testing and Commissioning",
        "period" => "2022",
        "description" => [
          ["title" => 'Client', 'value' => "PDO"]
        ],
        "data" => "IT/ TELECOMMUNICATION/ ICT"
      ),
      array(
        "project" => "PDO",
        "logo" => "images/clients/19_files/PDO.png",
        "title" => "Supply of EXFO OLTS MAX 945",
        "period" => "2022",
        "description" => [
          ["title" => 'Client', 'value' => "PDO"]
        ],
        "data" => "IT/ TELECOMMUNICATION/ ICT"
      ),
      array(
        "project" => "PDO",
        "logo" => "images/clients/19_files/PDO.png",
        "title" => "DHULIMA - CCTV , FOC Integration Project",
        "period" => "2023",
        "description" => [
          ["title" => 'Client', 'value' => "PDO"]
        ],
        "data" => "IT/ TELECOMMUNICATION/ ICT"
      ),
      array(
        "project" => "PDO",
        "logo" => "images/clients/19_files/PDO.png",
        "title" => "FAAL -LEK",
        "period" => "2023",
        "description" => [
          ["title" => 'Client', 'value' => "PDO"]
        ],
        "data" => "IT/ TELECOMMUNICATION/ ICT"
      ),
      array(
        "project" => "PDO",
        "logo" => "images/clients/19_files/PDO.png",
        "title" => "Supply, Installation and Configuration complete ELV systems(CCTV, WIFI, Data, Analog Telephony, Networking, PABGM AMAL)",
        "period" => "2023",
        "description" => [
          ["title" => 'Client', 'value' => "PDO"]
        ],
        "data" => "IT/ TELECOMMUNICATION/ ICT"
      ),
      array(
        "project" => "OOREDOO",
        "logo" => "images/clients/19_files/Oredoo-home.png",
        "title" => "Supply of OSP/FOC",
        "period" => "2014-2020",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Ooredoo']
        ],
        'data' => 'Supply of OSP and FOC for Ooredoo projects'
      ),
      array(
        "project" => "OOREDOO",
        "logo" => "images/clients/19_files/Oredoo-home.png",
        "title" => "MW Linking at business sites",
        "period" => "2014-2020",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Ooredoo']
        ],
        'data' => 'Microwave Linking at different business sites for ooredoo'
      ),
      array(
        "project" => "OOREDOO",
        "logo" => "images/clients/19_files/Oredoo-home.png",
        "title" => "MW Link - LOS/ Transmission Work/ LTE",
        "period" => "2014-2020",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Ooredoo']
        ],
        'data' => 'MW Link, LOS transmission works, LTE FDD works for the new ooredoo sites.'
      ),
      array(
        "project" => "OOREDOO",
        "logo" => "images/clients/19_files/Oredoo-home.png",
        "title" => "Supply of OSP/FOC Consultant",
        "period" => "2013 & ONGOING",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Ooredoo']
        ],
        'data' => 'Consultant.'
      ),
      array(
        "project" => "OOREDOO",
        "logo" => "images/clients/19_files/Oredoo-home.png",
        "title" => "DRIVE TEST",
        "period" => "2014-2020",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Ooredoo']
        ],
        'data' => 'Drive test project.'
      ),
      array(
        "project" => "OOREDOO",
        "logo" => "images/clients/19_files/Oredoo-home.png",
        "title" => "2G/3G/LTE/5G MW implementation.",
        "period" => "2013 & ONGING",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Ooredoo']
        ],
        'data' => 'Implementation and integration of different site.'
      ),
      array(
        "project" => "OOREDOO",
        "logo" => "images/clients/19_files/Oredoo-home.png",
        "title" => "Business to Business MW link implementation",
        "period" => "2013 & ONGING",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Ooredoo']
        ],
        'data' => 'Implementation and integration of different MW links.'
      ),
      array(
        "project" => "OOREDOO",
        "logo" => "images/clients/19_files/Oredoo-home.png",
        "title" => "MW LOS Survey",
        "period" => "2013 & ONGING",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Ooredoo']
        ],
        'data' => 'LOS survey different sites.'
      ),
      array(
        "project" => "OOREDOO",
        "logo" => "images/clients/19_files/Oredoo-home.png",
        "title" => "Boradband connection to all TRA school in OMAN",
        "period" => "2016 to 2018",
        "description" => [
          ["title" => 'Operator/Consultant', 'value' => 'Ooredoo']
        ],
        'data' => 'Broad band link connectivity.'
      ),
      array(
        "project" => "HUAWEI",
        "logo" => "images/clients/19_files/Huwaei.png",
        "title" => "HUAWEI NEW TK Project",
        "period" => "2014-2015",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Huawei'],
          ["title" => 'Operator', 'value' => 'Huawei']
        ],
        "data" => "Service Offerings Building of new telecom sites, Construction of tower foundation, shelter foundation, erection of tower. Installation & Commissioning of 2G, 3G LTE."
      ),
      array(
        "project" => "HUAWEI",
        "logo" => "images/clients/19_files/Huwaei.png",
        "title" => "Huawei RNPO Project",
        "period" => "2014-2015",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Huawei'],
          ["title" => 'Operator', 'value' => 'Huawei']
        ],
        "data" => "Service Offerings Network Planning, RF Planning & Design, RF Optimisation, Network Support System, IBS, 2G 3G LTE Drive Test"
      ),
      array(
        "project" => "HUAWEI",
        "logo" => "images/clients/19_files/Huwaei.png",
        "title" => "CW & TI",
        "period" => "2013-2014",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Huawei'],
          ["title" => 'Operator', 'value' => 'Ooredoo']
        ],
        "data" => "Service Offerings Civil TK Project"
      ),
      array(
        "project" => "HUAWEI",
        "logo" => "images/clients/19_files/Huwaei.png",
        "title" => "TI",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Huawei'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => "Service Offerings Network Deployment"
      ),
      array(
        "project" => "HUAWEI",
        "logo" => "images/clients/19_files/Huwaei.png",
        "title" => "CW & TI",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Huawei'],
          ["title" => 'Operator', 'value' => 'Nawras']
        ],
        "data" => "Service Offerings Professional Services"
      ),
      array(
        "project" => "HUAWEI",
        "logo" => "images/clients/19_files/Huwaei.png",
        "title" => "T E/Datacom/NGT",
        "period" => "2009-2010",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Huawei'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => "Service Offerings Network Deployment"
      ),
      array(
        "project" => "HUAWEI",
        "logo" => "images/clients/19_files/Huwaei.png",
        "title" => "RF Planning & Optimizations/ DT services",
        "period" => "2013-2014",
        "description" => [
          ["title" => 'Country', 'value' => "Middle East"],
          ["title" => 'Account', 'value' => 'Huawei'],
          ["title" => 'Operator', 'value' => 'Ooredoo']
        ],
        "data" => "Service Offerings RNO/RNP"
      ),
      array(
        "project" => "HUAWEI",
        "logo" => "images/clients/19_files/Huwaei.png",
        "title" => "RF Planning & Optimizations/ DT services",
        "period" => "2013-2014",
        "description" => [
          ["title" => 'Country', 'value' => "Middle East"],
          ["title" => 'Account', 'value' => 'Huawei'],
          ["title" => 'Operator', 'value' => 'Ooredoo']
        ],
        "data" => "Service Offerings RNO/RNP"
      ),
      array(
        "project" => "NSN",
        "logo" => "images/clients/19_files/NSN.png",
        "title" => "Resource Supply",
        "period" => "2010-2011",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'NSN'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => "Service Offerings Professional Services"
      ),
      array(
        "project" => "NSN",
        "logo" => "images/clients/19_files/NSN.png",
        "title" => "Drive Test/NPO",
        "period" => "2009-2010",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'NSN'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => "Service Offerings Professional Services"
      ),
      array(
        "project" => "NSN",
        "logo" => "images/clients/19_files/NSN.png",
        "title" => "Core/ebsc/Swap",
        "period" => "2009-2010",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'NSN'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => "Service Offerings Professional Services"
      ),
      array(
        "project" => "NSN",
        "logo" => "images/clients/19_files/NSN.png",
        "title" => "Phase -4",
        "period" => "2007-2008",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'NSN'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => "Service Offerings Professional Services"
      ),
      array(
        "project" => "SIEMENS",
        "logo" => "images/clients/5.png",
        "title" => "Road Project",
        "period" => "2005-2006",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Siemens'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => "Service Offerings Network Deployment"
      ),
      array(
        "project" => "SIEMENS",
        "logo" => "images/clients/5.png",
        "title" => "Road Project",
        "period" => "2004-2005",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Siemens'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => "Service Offerings Network Deployment"
      ),
      array(
        "project" => "ROP",
        "logo" => "images/clients/ROP-ROFA.jpg",
        "title" => "Supply and installation of Video wall System",
        "period" => "2018-2019",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'ROP'],
          ["title" => 'Operator', 'value' => 'ROP']
        ],
        "data" => "Supply, Installation ,testing and commissioning of Video wall system"
      ),
      array(
        "project" => "ROP",
        "logo" => "images/clients/ROP-ROFA.jpg",
        "title" => "Conferencing System",
        "period" => "2021-2021",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'RAFO'],
          ["title" => 'Operator', 'value' => 'RAFO']
        ],
        "data" => "Installation and Configuration of Huawei Conferencing System"
      ),
      array(
        "project" => "ROP",
        "logo" => "images/clients/ROP-ROFA.jpg",
        "title" => "Supply, Installation and Configuration of Cloudland Box 300",
        "period" => "2022",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'RAFO'],
          ["title" => 'Operator', 'value' => 'RAFO']
        ],
        "data" => " IT/TELECOMMUNICATION/ICT"
      ),
      array(
        "project" => "ROP",
        "logo" => "images/clients/ROP-ROFA.jpg",
        "title" => "Supply and Installation of CCTV System and Video Conferencing System",
        "period" => "2022",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'RAFO'],
          ["title" => 'Operator', 'value' => 'RAFO']
        ],
        "data" => " IT/TELECOMMUNICATION/ICT"
      ),
      array(
        "project" => "ROP",
        "logo" => "images/clients/ROP-ROFA.jpg",
        "title" => "TOWER, VOR , RADAR AND SPECIAL PROJECTS FOR RAFO MASIRAH",
        "period" => "2023",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'RAFO'],
          ["title" => 'Operator', 'value' => 'RAFO']
        ],
        "data" => " IT/TELECOMMUNICATION/ICT"
      ),
      array(
        "project" => "ROP",
        "logo" => "images/clients/ROP-ROFA.jpg",
        "title" => "Desktop installation project for Motrolla all over Oman",
        "period" => "2023",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'RAFO'],
          ["title" => 'Operator', 'value' => 'RAFO']
        ],
        "data" => " IT/TELECOMMUNICATION/ICT"
      ),
      array(
        "project" => "ROP",
        "logo" => "images/clients/ROP-ROFA.jpg",
        "title" => "Fiber civil and FOC splicing and testing",
        "period" => "2023",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'RAFO'],
          ["title" => 'Operator', 'value' => 'RAFO']
        ],
        "data" => " IT/TELECOMMUNICATION/ICT"
      ),
      array(
        "project" => "FIBER OPTICS",
        "logo" => "images/clients/Fiber-Optics.png",
        "title" => "DCS Upgrade Phase II Fiber Optic Network",
        "period" => "2021 – ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'AOTC'],
          ["title" => 'Operator', 'value' => 'Oman LNG']
        ],
        "data" => "Civil Work and FOC installation"
      ),
      array(
        "project" => "FIBER OPTICS",
        "logo" => "images/clients/Fiber-Optics.png",
        "title" => "FOC- OPGW Cable Splicing",
        "period" => "2021 – ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'L & T'],
          ["title" => 'Operator', 'value' => 'PDO']
        ],
        "data" => "Fiber Optics OPGW Cable Splicing testing and Commissioning"
      ),
      array(
        "project" => "FIBER OPTICS",
        "logo" => "images/clients/Fiber-Optics.png",
        "title" => "Fiber Optics Splicing",
        "period" => "2021 September – 2021 November",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'GPS'],
          ["title" => 'Operator', 'value' => 'PDO']
        ],
        "data" => "Fiber Optics Splicing, Testing and Commissioning"
      ),
      array(
        "project" => "FIBER OPTICS",
        "logo" => "images/clients/Fiber-Optics.png",
        "title" => "Tower Erection",
        "period" => "2021 March – 2021 June",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'STS'],
          ["title" => 'Operator', 'value' => 'Duqm Refinery and Petrofac']
        ],
        "data" => "Tower Erection"
      ),
      array(
        "project" => "FIBER OPTICS",
        "logo" => "images/clients/Fiber-Optics.png",
        "title" => "Installation and AMC of Avaya IP Phones",
        "period" => "2018 - 2021",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Ubhar Capital'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => "Installation , Configuration, Testing and AMC of Avaya IP Phones"
      ),
      array(
        "project" => "FIBER OPTICS",
        "logo" => "images/clients/Fiber-Optics.png",
        "title" => "FTTH Construction in Sohar",
        "period" => "2020",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'OHI Telecom'],
          ["title" => 'Operator', 'value' => 'Oman Broadband']
        ],
        "data" => "FTTH Construction in Sohar for Oman Broadband"
      ),
      array(
        "project" => "FIBER OPTICS",
        "logo" => "images/clients/Fiber-Optics.png",
        "title" => "FOC Installation",
        "period" => "2020 - Ongoing",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'OHI Telecom'],
          ["title" => 'Operator', 'value' => 'ARA Drilling']
        ],
        "data" => "FOC Installation in PDO Sites"
      ),
      array(
        "project" => "FIBER OPTICS",
        "logo" => "images/clients/Fiber-Optics.png",
        "title" => "FTTH Construction in Ibri",
        "period" => "2020",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Al Jassar Telecom LLC'],
          ["title" => 'Operator', 'value' => 'Oman Broadband']
        ],
        "data" => "FTTH Construction in Ibri Al Murtafa Al Dhahira Region for Oman Broadband"
      ),
      array(
        "project" => "FIBER",
        "logo" => "images/clients/Fiber-Optics.png",
        "title" => "FTTH Construction in Nizwa",
        "period" => "2019-2020",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Al Jassar Telecom LLC'],
          ["title" => 'Operator', 'value' => 'Oman Broadband']
        ],
        "data" => "FTTH Construction in Nizwa Farq-Al Dhakelyah Region for Oman Broadband"
      ),
      array(
        "project" => "HELIOS",
        "logo" => "images/clients/Helios.png",
        "title" => "New Tower Construction and Strengthening of Tower",
        "period" => "2023",
        "description" => [
          ["title" => 'Country', 'value' => ""],
          ["title" => 'Account', 'value' => ''],
          ["title" => 'Operator/Consultant', 'value' => 'Omantel']
        ],
        "data" => "Construction of tower foundation, pedestals and boundary walls with HTO standard."
      ),
      array(
        "project" => "HELIOS",
        "logo" => "images/clients/Helios.png",
        "title" => "Tower Strengthing",
        "period" => "2023",
        "description" => [
          ["title" => 'Country', 'value' => ""],
          ["title" => 'Account', 'value' => ''],
          ["title" => 'Operator/Consultant', 'value' => 'Vodafone, Omantel, Oredoo']
        ],
        "data" => "Fabrication of new bracing and leg members based on structural analysis report. Replacing existing members by new members."
      ),
      array(
        "project" => "HELIOS",
        "logo" => "images/clients/Helios.png",
        "title" => "Tower Maintenance",
        "period" => "2023",
        "description" => [
          ["title" => 'Country', 'value' => ""],
          ["title" => 'Account', 'value' => ''],
          ["title" => 'Operator/Consultant', 'value' => 'Omantel, Oredoo']
        ],
        "data" => "Conduct detailed TSSR survey, fabrication and replacing of new members."
      ),
      array(
        "project" => "HELIOS",
        "logo" => "images/clients/Helios.png",
        "title" => "GRDU Maintenance",
        "period" => "2023",
        "description" => [
          ["title" => 'Country', 'value' => ""],
          ["title" => 'Account', 'value' => ''],
          ["title" => 'Operator/Consultant', 'value' => 'Omantel']
        ],
        "data" => "Conduct detailed TSSR survey, fabrication and replacing of new members. protect the tower from collapse condition."
      ),
      array(
        "project" => "VODAFONE",
        "logo" => "images/clients/19_files/vodafone.png",
        "title" => "Vodafone CO -Location",
        "period" => "2022-2023",
        "description" => [
          ["title" => 'Country', 'value' => ""],
          ["title" => 'Account', 'value' => ''],
          ["title" => 'Operator/Consultant', 'value' => 'Omantel, Oredoo']
        ],
        "data" => "Supply and installation of ACDB's, Cable ladders & Antenna/MW brackets, Power connection."
      ),
      array(
        "project" => "VODAFONE",
        "logo" => "images/clients/19_files/vodafone.png",
        "title" => "Vodafone Co-location",
        "period" => "2023",
        "description" => [
          ["title" => 'Country', 'value' => ""],
          ["title" => 'Account', 'value' => ''],
          ["title" => 'Operator/Consultant', 'value' => 'Omantel, Oredoo']
        ],
        "data" => "Assembling and installation of tower structure. Installation and commissioning of Shelter, Rectifier and ACDB's."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Supply and installation of Huawei IP Telephony",
        "period" => "2018 May – 2018 July",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Advance Engineering LLC'],
          ["title" => 'Operator', 'value' => 'Advance Engineering LLC']
        ],
        "data" => "Supply, installation, Testing and Commissioning of Huawei IP Telephony and Servers."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Supply and installation of Nurse call System",
        "period" => "2018-2020",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Al Tasnim'],
          ["title" => 'Operator', 'value' => 'Royal Court Affairs (RCA)']
        ],
        "data" => "Supply, installation, Testing and Commissioning of ASCOM nurse call system at Sohar Palace."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Installation of ELV Systems",
        "period" => "2018-2020",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => ' Royal Crown Hotel'],
          ["title" => 'Operator', 'value' => ' Royal Crown Hotel']
        ],
        "data" => "Installation, Configuration and testing of Complete ELV Systems."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Installation and AMC of Avaya IP Phones",
        "period" => "2018-2020",
        "description" => [
          ["title" => 'Country', 'value' => "Oman"],
          ["title" => 'Account', 'value' => 'Ubhar Capital'],
          ["title" => 'Operator', 'value' => 'Omantel']
        ],
        "data" => "Installation , Configuration, Testing and AMC of Avaya IP Phones."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Supply and Installation of Hospital token systems",
        "period" => "2020",
        "description" => [
          ["title" => 'Client', 'value' => "Ministry of Health-Bhawan Projects & Telecom"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Supply of Huawei Switches & IT Accessories",
        "period" => "2020",
        "description" => [
          ["title" => 'Client', 'value' => "Ministry of Education-Huawei"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Supply and Installation of Hikvision CCTV System",
        "period" => "2020",
        "description" => [
          ["title" => 'Client', 'value' => "Smart Digital Technologies"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Supply of Server Storage",
        "period" => "2020",
        "description" => [
          ["title" => 'Client', 'value' => "Ministry of Manpower:Ibra college"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Supply of Cisco Switches",
        "period" => "2020",
        "description" => [
          ["title" => 'Client', 'value' => "Ministry of Education:Meridian IT"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Supply and Installation of Avaya Telephone, CCTV, ACS Systems",
        "period" => "2020",
        "description" => [
          ["title" => 'Client', 'value' => "Yas Communication-Majid Water Cooler & Airconditioning"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Supply and Installation of Huawei Data Switches",
        "period" => "2020",
        "description" => [
          ["title" => 'Client', 'value' => "Ministry of Education:Meridian IT"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Supply and Installation of ASCOM Nurse call System for Sohar Palace",
        "period" => "2021",
        "description" => [
          ["title" => 'Client', 'value' => "RCA-2-Al Tasnim"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Supply, Installation and Configuration and AMC of Avaya IP Telephony",
        "period" => "2021",
        "description" => [
          ["title" => 'Client', 'value' => "Omantel-Ubhar Capital"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Supply and Installation of Video Wall ROP ROP 40000",
        "period" => "2021",
        "description" => [
          ["title" => 'Client', 'value' => "ROP"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Supply, Installation and Configuration complete ELV systems (CCTV, WIFI, Data, Analog Telephony, Networking, PAI3GM System, SMATV)",
        "period" => "2021",
        "description" => [
          ["title" => 'Client', 'value' => "Royal Crown Hotel-Advance Engineering LLC"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Supply and Installation of Huawei IP Telephony, CCTV System & Server",
        "period" => "2021",
        "description" => [
          ["title" => 'Client', 'value' => "Advance Engineering LLC"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "WP#20 FTTH Construction in Nizwa",
        "period" => "2022",
        "description" => [
          ["title" => 'Client', 'value' => "Oman Broadband-Al Jasser Telecom"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "WP#33 FTTH Construction in Sohar",
        "period" => "2022",
        "description" => [
          ["title" => 'Client', 'value' => "Oman Broadband-OHI Telecom"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "VVP#41 FTTH Construction in Ibri",
        "period" => "2022",
        "description" => [
          ["title" => 'Client', 'value' => "TCIL"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Supply of EXFO OLTS MAS 945",
        "period" => "2022",
        "description" => [
          ["title" => 'Client', 'value' => "TCIL"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "WP#45 Civil and Telecom Works for Quriyat",
        "period" => "2022",
        "description" => [
          ["title" => 'Client', 'value' => "Oman Fiber Optic Co. SAOC"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "FOC Cable Work in Qarn Al Alam",
        "period" => "2022",
        "description" => [
          ["title" => 'Client', 'value' => "PDO/Galfar"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "WP#55 FTTH Construction in Buraimi",
        "period" => "2022",
        "description" => [
          ["title" => 'Client', 'value' => "MOTOROLA"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "(HP2, HP4, HP5, HP6) Telecom Services",
        "period" => "2019",
        "description" => [
          ["title" => 'Client', 'value' => "GPS"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "FOC Switch Installation",
        "period" => "2023",
        "description" => [
          ["title" => 'Client', 'value' => " Motrolla"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Work station Installation and Commissioning",
        "period" => "2023",
        "description" => [
          ["title" => 'Client', 'value' => " Motrolla"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "FOC Termination and Testing",
        "period" => "2023",
        "description" => [
          ["title" => 'Client', 'value' => "AOTC"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Testing L&T",
        "period" => "2023",
        "description" => [
          ["title" => 'Client', 'value' => "AOTC"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Rectification GPS",
        "period" => "2023",
        "description" => [
          ["title" => 'Client', 'value' => "GPS"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Relocation FOC",
        "period" => "2023",
        "description" => [
          ["title" => 'Client', 'value' => " OTC"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "ICT",
        "logo" => "images/clients/ICT.png",
        "title" => "Gate barrier",
        "period" => "2023",
        "description" => [
          ["title" => 'Client', 'value' => "GALFAR"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "IT/TELECOMMUNICATION/ICT."
      ),
      array(
        "project" => "MEP",
        "logo" => "images/clients/MEP.jpg",
        "title" => "MEP Works at Propossed COM. residential BLD at AL KHUWAIR",
        "period" => "2015 - 2016",
        "description" => [
          ["title" => 'Client', 'value' => "GOLDEN GROUP/ABDULLAH MUKADAM"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "Supply and installation of all MEP material and installation."
      ),
      array(
        "project" => "MEP",
        "logo" => "images/clients/MEP.jpg",
        "title" => "MEP Works at Propossed COM Residential BLD at GHALA",
        "period" => "2017 - 2019",
        "description" => [
          ["title" => 'Client', 'value' => "OMAN RESIDENCE/SPACE DESIGNERS INTL LLC"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "Supply and installation of all MEP material and installation."
      ),
      array(
        "project" => "MEP",
        "logo" => "images/clients/MEP.jpg",
        "title" => "MEP Works at Propossed at NIZWA Industrial Estate",
        "period" => "2017 - 2018",
        "description" => [
          ["title" => 'Client', 'value' => "IDS / AL NADA ENGINEERING CONSUTANCY"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "Supply and installation of all MEP material and installation."
      ),
      array(
        "project" => "MEP",
        "logo" => "images/clients/MEP.jpg",
        "title" => "MEP Works at Proposed Pet Bottle Factory at SUMAIL Industrial Estate",
        "period" => "2017 - 2018",
        "description" => [
          ["title" => 'Client', 'value' => "AL NADA INDUSTRIES / LEEYANA ENGINEERING CONSULTANCY"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "Supply and installation of all MEP material and installation."
      ),
      array(
        "project" => "MEP",
        "logo" => "images/clients/MEP.jpg",
        "title" => "MEP Works at Propossed COM Residential BLD at GHALA",
        "period" => "2017 - 2018",
        "description" => [
          ["title" => 'Client', 'value' => "DANA HOUSE /SPACE DESIGNERS INTL LLC"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "Supply and installation of all MEP material and installation."
      ),
      array(
        "project" => "MEP",
        "logo" => "images/clients/MEP.jpg",
        "title" => "MEP Works at Propossed COM and Residential BLD at AL KHUWAIR",
        "period" => "2018 - 2019",
        "description" => [
          ["title" => 'Client', 'value' => "AL AMAL /SPACE DESIGNERS INTL LLC"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "Supply and installation of all MEP material and installation."
      ),
      array(
        "project" => "MEP",
        "logo" => "images/clients/MEP.jpg",
        "title" => "MEP works at Propossed Storage Warehouse at BARKA",
        "period" => "2019 - 2020",
        "description" => [
          ["title" => 'Client', 'value' => "MD.NAZIR / AL SHAMIL ENGINEERING CONSULTANCY"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "Supply and installation of all MEP material and installation"
      ),
      array(
        "project" => "MEP",
        "logo" => "images/clients/MEP.jpg",
        "title" => "MEP Works at 1000 Men Camp at BARKA",
        "period" => "2019 - 2020",
        "description" => [
          ["title" => 'Client', 'value' => "Synergy"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "Supply and installation of all MEP material and installation"
      ),
      array(
        "project" => "MEP",
        "logo" => "images/clients/MEP.jpg",
        "title" => "MEP Works at Propossed COM and Residential BLD at AZAIBA",
        "period" => "2019 - 2020",
        "description" => [
          ["title" => 'Client', 'value' => "SUHIL AL BADAR CONSTRUCTION /ABDULLAH MUKADAM"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "Supply and installation of all MEP material and installation"
      ),
      array(
        "project" => "MEP",
        "logo" => "images/clients/MEP.jpg",
        "title" => "MEP Works at A1 Fence Factory at BURAIMI Industrial Estate",
        "period" => "2019 - 2020",
        "description" => [
          ["title" => 'Client', 'value' => "A1 FENCE / AL SHAMIL ENDINEERING CONSULTANCY"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "Supply and installation of all MEP material and installation"
      ),
      array(
        "project" => "MEP",
        "logo" => "images/clients/MEP.jpg",
        "title" => "MEP Works at Propossed COM and Residential BLD at DUQM B+G+8",
        "period" => "2019 - 2021",
        "description" => [
          ["title" => 'Client', 'value' => "A1 FENCE / AL SHAMIL ENDINEERING CONSULTANCY"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "AL NADA INDUSTRIES / LEEYANA ENGINEERING CONSULTANCY"
      ),
      array(
        "project" => "MEP",
        "logo" => "images/clients/MEP.jpg",
        "title" => "MEP Works Propossed Labour Camp at DUQM",
        "period" => "2019 - 2022",
        "description" => [
          ["title" => 'Client', 'value' => "AL RAHA INTL LLC / AL SHAMIL ENGINEERING CONSULTANCY"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "AL NADA INDUSTRIES / LEEYANA ENGINEERING CONSULTANCY"
      ),
      array(
        "project" => "MEP",
        "logo" => "images/clients/MEP.jpg",
        "title" => "MEP Works at Propossed Materials Storage Warehouse at SAHAM",
        "period" => "2019 - 2022",
        "description" => [
          ["title" => 'Client', 'value' => "AL MAJIDI / SPACE DESIGNERS INTL LLC"],
          ["title" => '', 'value' => ''],
          ["title" => '', 'value' => '']
        ],
        "data" => "AL NADA INDUSTRIES / LEEYANA ENGINEERING CONSULTANCY"
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
              <div class="logo"><a href="index.html"><img class="header-logo" src="images/Logo/vyklogo-01.png" alt=""
                    title=""></a>
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
          <div class="nav-logo"><a href="index.html"><img class="header-logo" src="images/Logo/vyklogo-01.png" alt=""
                title=""></a></div>
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
            <button type="button" class="btn btn-default is-checked" data-filter=".ERICSSON">ERICSSON</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter=".OMANTEL">OMANTEL</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter=".OTC">OTC</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter=".PDO">PDO</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter=".OOREDOO">OOREDOO</button>
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
            <button type="button" class="btn btn-default is-checked" data-filter=".ROP">ROP /
              RAFO</button>
          </div>
          <div class="btn-group button-border" role="group">
            <button type="button" class="btn btn-default is-checked" data-filter=".FIBER">FIBER
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
              <div class="col-xs-12 col-sm-6 col-md-6 grid-item <?php echo $project['project']; ?>">
                <div class="gallery-block_one-inner gallery-height">
                  <div class="gallery-block_one-overlay">
                  </div>
                  <div style="display: flex;" class="pt-2 ps-2">
                    <div class="w-25">
                      <img src="<?php echo $project['logo']; ?>" alt="Avatar">
                    </div>
                    <div class="w-75">
                      <h5 class="gallery-block_one-heading">
                        <?php echo $project['title']; ?>
                      </h5>
                      <h5 class="gallery-block_one-heading">
                        <?php echo $project['period']; ?>
                      </h5>
                    </div>
                  </div>
                  <div class="p-3 m-0 text-justify d-lg-flex gallery-block_one-heading fw-normal fs-6 split-in-left">
                    <ul class="w-lg-50 w-100">
                      <?php foreach ($project['description'] as $description) {
                        echo "<li><b>" . $description['title'] . '</b>';
                        echo $description['title'] ? " : " : '';
                        echo $description['value'] . "</li>";
                      } ?>
                    </ul>
                    <ul class="w-lg-50 w-100">
                      <?php echo "<li>" . $project['data']; ?>
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
            <div class="row clearfix">


              <!-- Footer Column 4 -->
              <div class="footer_column  col-lg-4 col-md-6 col-sm-12">
                <div class="d-flex">
                  <div class="p-2" style="display: flex; align-items: center;">
                    <img class="footer-logo" src="./images/Logo/vyklogo-white-01.svg" alt="">
                  </div>
                  <div class="footer-widget contact-widget">
                    <h5 class="footer-title">VYK Network Pvt.Ltd</h5>
                    <ul class="footer-contact_list">
                      <ul class="footer-contact_list">
                        <li><span class="icon fas fa-map-marker-alt fa-fw"></span>
                          AHCL Ansal Town,<br>Indore, India.</li>
                        <li><span class="icon fas fa-envelope fa-fw"></span>info@vyknetworkpvtltd.com
                        </li>
                        <li><span class="icon fas fa-phone fa-fw"></span>+968 24170030</li>
                      </ul>
                  </div>
                </div>
              </div>
              <!-- Footer Column 4 -->
              <div class="footer_column  col-lg-4 col-md-6 col-sm-12">
                <div class="d-flex">
                  <div class="p-2" style="display: flex; align-items: center;">
                    <img class="footer-logo" src="./images/Logo/we-network-white-logo-01.svg" alt="">
                  </div>
                  <div class="footer-widget contact-widget">
                    <h5 class="footer-title">WE Netwok LLC</h5>
                    <ul class="footer-contact_list">
                      <li><span class="icon fas fa-map-marker-alt fa-fw"></span>First floor,
                        0401-Z-319-KOM-4,<br>
                        Knowledge Oasis Muscat,<br>PO BOX: 1641, Postal Code: 114,<br>Al Rusayl,
                        Muscat,
                        Sultanate of Oman</li>

                    </ul>
                  </div>
                </div>
              </div>

              <!-- Footer Column 5 -->
              <div class="footer_column col-lg-4 col-md-6 col-sm-12 centered">
                <div class="footer-widget contact-widget ps-4">
                  <h5 class="footer-title">Quick Links</h5>
                  <ul class="footer-list">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="product.html">Products</a></li>
                    <li><a href="projects.php">Projects</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                  </ul>
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