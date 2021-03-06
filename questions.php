<?php
$json = '[
  {
    "required": true,
    "min": "9",
    "max": "15",
    "question": "Phone",
    "format":"numeric_text",
    "id": "Phone",
    "type": "text"
  },
  {
    "required": true,
    "min": "18",
    "max": "50",
    "question": "How old are you?",
    "id": "How_old_are_you",
    "format": "integer",
    "type": "text"
  },
  {
    "required": true,
    "min": "10",
    "max": "20",
    "question": "Cover letter",
    "id": "cover_letter",
    "type": "textarea"
  },
  {
    "id":"startdate",
    "required":true,
    "type":"date",
    "question":"Start date?",
    "format":"dd/MM/yyyy",
    "min":"01/06/2022",
    "max":"03/07/2022"
  },
  {
    "id": "areyoufreelancer",
    "question": "Are you a freelancer?",
    "required": true,
    "options": [
      {
        "value": "false",
        "label": "No"
      },
      {
        "value": "true",
        "label": "Yes"
      }
    ],
    "type": "select"
  },
  {
    "required": true,
    "min": "100",
    "max": "500",
    "question": "Salary expectations?",
    "id": "salary_expectations",
    "format": "decimal",
    "type": "text"
  },
  {
    "id": "profile-minimumLevelOfEducation",
    "question": "What is your highest level of education?",
    "required": true,
    "options": [
      {
        "value": "0",
        "label": "High School or Less"
      },
      {
        "value": "1",
        "label": "College"
      }
    ],
    "type": "select"
  },
  {
    "id": "profile-highSchoolInfo",
    "text": "Education Information",
    "fontsize": 25,
    "condition": {
      "id": "profile-minimumLevelOfEducation",
      "value": "0"
    },
    "type": "information"
  },
  {
    "required": true,
    "type": "information",
    "id": "complianceVevraaGroup",
    "text": "<strong>Invitation for Job Applicants to Self-Identify as a U.S. Veteran<\/strong><ul><li>A \u201cdisabled veteran\u201d is one of the following:<ul><li>a veteran of the U.S. military, ground, naval or air service who is entitled to compensation (or who but for the receipt of military retired pay would be entitled to compensation) under laws administered by the Secretary of Veterans Affairs; or<\/li><li>a person who was discharged or released from active duty because of a service-connected disability.<\/li><\/ul><\/li><li>A \u201crecently separated veteran\u201d means any veteran during the three-year period beginning on the date of such veterans discharge or release from active duty in the U.S. military, ground, naval, or air service.<\/li><li>An \u201cactive duty wartime or campaign badge veteran\u201d means a veteran who served on active duty in the U.S. military, ground, naval or air service during a war, or in a campaign or expedition for which a campaign badge has been authorized under the laws administered by the Department of Defense.<\/li><li>An \u201cArmed forces service medal veteran\u201d means a veteran who, while serving on active duty in the U.S. military, ground, naval or air service, participated in a United States military operation for which an Armed Forces service medal was awarded pursuant to Executive Order 12985.<\/li><\/ul>"
  },
  {
    "id": "select-13239",
    "question": "Have you ever worked for this company or franchise-owned location before?",
    "required": true,
    "options": [
      {
        "value": "1",
        "label": "Yes"
      },
      {
        "value": "2",
        "label": "No"
      }
    ],
    "type": "select"
  },
  {
    "id": "text-13003",
    "question": "If yes, please provide when and where.",
    "required": true,
    "condition": {
      "id": "select-13239",
      "value": "1"
    },
    "type": "textarea"
  },
  {
    "id": "select-14191",
    "question": "Do you have any relatives or family members that work for this company?",
    "required": true,
    "options": [
      {
        "value": "1",
        "label": "Yes"
      },
      {
        "value": "2",
        "label": "No"
      }
    ],
    "type": "select"
  },
  {
    "id": "text-15058",
    "question": "If so, please provide that persons name",
    "required": true,
    "condition": {
      "id": "select-14191",
      "value": "1"
    },
    "type": "textarea"
  },
  {
    "id": "text-15059",
    "required": true,
    "type":"select",
    "question":"IMPORTANT: please read and agree to our <a href=\"https:\/\/9gag.com\/\">Recruitment Privacity Statement<\/a>",
    "options": [
      {
        "value": "1",
        "label": "Yes"
      },
      {
        "value": "2",
        "label": "No"
      }
    ]
  },
  {
    "required": true,
    "type": "client_tos",
    "link": "https://9gag.com/",
    "id": "privacy_policy"
  },
  {
    "id": "privacy_policy2",
    "text": "He le\u00eddo la <a class=\"privacy-policy\" data-turbo=\"false\" href=\"https:\/\/vacantes.jauser.net\/privacy-policy\">Pol\u00edtica de privacidad<\/a> y confirmo que Jauser almacenar\u00e1 mis datos personales para poder procesar mi solicitud de empleo.",
    "type": "client_tos",
    "required": 1
  }
]
';

print_r($json);

