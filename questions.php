<?php
$json = '[
          {
            "limit": 40,
            "required": true,
            "question": "Street",
            "id": "address-street",
            "type": "text"
          },
          {
            "required": true,
            "min": "18",
            "max": "50",
            "question": "How old are you?",
            "id": "How_old_are_you",
            "format":"integer",
            "type": "text"
          },
          {
            "required": true,
            "min": "100",
            "max": "500",
            "question": "Salary expectations?",
            "id": "salary_expectations",
            "format":"decimal",
            "type": "text"
          },
          {
            "limit": 25,
            "required": false,
            "question": "Street 2",
            "id": "address-street2",
            "type": "text"
          },
          {
            "id":"yorName",
            "required":true,
            "question":"Your Name",
            "type":"textarea"
          },
          {
            "type": "hierarchical",
            "required": true,
            "question": "Country/State",
            "options": [
              {
                "value": "US",
                "label": "United States"
              },
              {
                "value": "CA",
                "label": "Canada"
              }
            ],
            "hierarchicalOptions": [
              {
                "id": "countryState_US",
                "type": "select",
                "condition": {
                  "id": "address-countryState",
                  "value": "US"
                },
                "options": [
                  {
                    "value": "AL",
                    "label": "Alabama"
                  },
                  {
                    "value": "AK",
                    "label": "Alaska"
                  },
                  {
                    "value": "AZ",
                    "label": "Arizona"
                  },
                  {
                    "value": "AR",
                    "label": "Arkansas"
                  },
                  {
                    "value": "CA",
                    "label": "California"
                  },
                  {
                    "value": "CO",
                    "label": "Colorado"
                  },
                  {
                    "value": "CT",
                    "label": "Connecticut"
                  },
                  {
                    "value": "DE",
                    "label": "Delaware"
                  },
                  {
                    "value": "DC",
                    "label": "District of Columbia"
                  },
                  {
                    "value": "FL",
                    "label": "Florida"
                  },
                  {
                    "value": "GA",
                    "label": "Georgia"
                  },
                  {
                    "value": "HI",
                    "label": "Hawaii"
                  },
                  {
                    "value": "ID",
                    "label": "Idaho"
                  },
                  {
                    "value": "IL",
                    "label": "Illinois"
                  },
                  {
                    "value": "IN",
                    "label": "Indiana"
                  },
                  {
                    "value": "IA",
                    "label": "Iowa"
                  },
                  {
                    "value": "KS",
                    "label": "Kansas"
                  },
                  {
                    "value": "KY",
                    "label": "Kentucky"
                  },
                  {
                    "value": "LA",
                    "label": "Louisiana"
                  },
                  {
                    "value": "ME",
                    "label": "Maine"
                  },
                  {
                    "value": "MD",
                    "label": "Maryland"
                  },
                  {
                    "value": "MA",
                    "label": "Massachusetts"
                  },
                  {
                    "value": "MI",
                    "label": "Michigan"
                  },
                  {
                    "value": "MN",
                    "label": "Minnesota"
                  },
                  {
                    "value": "MS",
                    "label": "Mississippi"
                  },
                  {
                    "value": "MO",
                    "label": "Missouri"
                  },
                  {
                    "value": "MT",
                    "label": "Montana"
                  },
                  {
                    "value": "NE",
                    "label": "Nebraska"
                  },
                  {
                    "value": "NV",
                    "label": "Nevada"
                  },
                  {
                    "value": "NH",
                    "label": "New Hampshire"
                  },
                  {
                    "value": "NJ",
                    "label": "New Jersey"
                  },
                  {
                    "value": "NM",
                    "label": "New Mexico"
                  },
                  {
                    "value": "NY",
                    "label": "New York"
                  },
                  {
                    "value": "NC",
                    "label": "North Carolina"
                  },
                  {
                    "value": "ND",
                    "label": "North Dakota"
                  },
                  {
                    "value": "OH",
                    "label": "Ohio"
                  },
                  {
                    "value": "OK",
                    "label": "Oklahoma"
                  },
                  {
                    "value": "OR",
                    "label": "Oregon"
                  },
                  {
                    "value": "PA",
                    "label": "Pennsylvania"
                  },
                  {
                    "value": "RI",
                    "label": "Rhode Island"
                  },
                  {
                    "value": "SC",
                    "label": "South Carolina"
                  },
                  {
                    "value": "SD",
                    "label": "South Dakota"
                  },
                  {
                    "value": "TN",
                    "label": "Tennessee"
                  },
                  {
                    "value": "TX",
                    "label": "Texas"
                  },
                  {
                    "value": "UT",
                    "label": "Utah"
                  },
                  {
                    "value": "VT",
                    "label": "Vermont"
                  },
                  {
                    "value": "VA",
                    "label": "Virginia"
                  },
                  {
                    "value": "WA",
                    "label": "Washington"
                  },
                  {
                    "value": "WV",
                    "label": "West Virginia"
                  },
                  {
                    "value": "WI",
                    "label": "Wisconsin"
                  },
                  {
                    "value": "WY",
                    "label": "Wyoming"
                  },
                  {
                    "value": "PR",
                    "label": "Puerto Rico"
                  },
                  {
                    "value": "NA",
                    "label": "Other"
                  },
                  {
                    "value": "GU",
                    "label": "Guam"
                  },
                  {
                    "value": "MP",
                    "label": "Northern Marianas Islands"
                  },
                  {
                    "value": "VI",
                    "label": "Virgin Islands"
                  }
                ]
              },
              {
                "id": "countryState_CA",
                "type": "select",
                "condition": {
                  "id": "address-countryState",
                  "value": "CA"
                },
                "options": [
                  {
                    "value": "AB",
                    "label": "Alberta"
                  },
                  {
                    "value": "BC",
                    "label": "British Columbia"
                  },
                  {
                    "value": "MB",
                    "label": "Manitoba"
                  },
                  {
                    "value": "NB",
                    "label": "New Brunswick"
                  },
                  {
                    "value": "NL",
                    "label": "Newfoundland and Labrador"
                  },
                  {
                    "value": "NT",
                    "label": "Northwest Territories"
                  },
                  {
                    "value": "NS",
                    "label": "Nova Scotia"
                  },
                  {
                    "value": "NU",
                    "label": "Nunavut"
                  },
                  {
                    "value": "ON",
                    "label": "Ontario"
                  },
                  {
                    "value": "PE",
                    "label": "Prince Edward Island"
                  },
                  {
                    "value": "QC",
                    "label": "Quebec"
                  },
                  {
                    "value": "SK",
                    "label": "Saskatchewan"
                  },
                  {
                    "value": "YT",
                    "label": "Yukon"
                  }
                ]
              },
              {
                "id": "city_CA",
                "type": "select",
                "condition": {
                  "id": "countryState_CA",
                  "value": "ON"
                },
                "options": [
                  {
                    "value": "OT",
                    "label": "Ottawa"
                  },
                  {
                    "value": "BR",
                    "label": "Brampton"
                  },
                  {
                    "value": "OA",
                    "label": "Oakville"
                  },
                  {
                    "value": "OS",
                    "label": "Oshawa"
                  },
                  {
                    "value": "MA",
                    "label": "Markham"
                  },
                  {
                    "value": "VA",
                    "label": "Vaughan"
                  }
                ]
              },
               {
                "id": "Adreed_CA",
                "type": "select",
                "condition": {
                  "id": "city_CA",
                  "value": "OT"
                },
                "options": [
                  {
                    "value": "GB",
                    "label": "The Glebe"
                  },
                  {
                    "value": "PR",
                    "label": "Preston"
                  },
                  {
                    "value": "SH",
                    "label": "Sandy Hill"
                  },
                  {
                    "value": "LT",
                    "label": "Lower town"
                  }
                ]
              }
            ],
            "id": "address-countryState"
          },
          {
            "required": true,
            "question": "Zip/Postal Code",
            "limit": 6,
            "validation": "zip",
            "type": "text",
            "id": "address-zip"
          },
          {
            "type": "select",
            "required": true,
            "question": "Have you ever worked for Pizza Hut?",
            "id": "select-28465",
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
              "type":"select",
              "required":true,
              "question":"If Yes, Where?",
              "id":"text-28461",
              "condition":{
                 "id":"select-28465",
                 "value":"1"
              },
              "options": [
              {
                "value": "1",
                "label": "California"
              },
              {
                "value": "2",
                "label": "Texas"
              }
            ]
          },
          {
            "type":"date",
            "required":true,
            "question":"If Yes, When?",
            "format":"dd/MM/yyyy",
            "id":"text-28458",
            "condition":{
               "id":"select-28465",
               "value":"1"
            }
         },
         {
          "type":"text",
          "required":true,
          "question":"What is the name of the employer?",
          "id":"text-28466",
          "condition":{
             "id":"select-28465",
             "value":"1"
           }
        },
         {
          "type":"textarea",
          "required":true,
          "question":"How was that experience?",
          "id":"text-28469",
          "condition":{
             "id":"select-28465",
             "value":"1"
           }
        },
        {
          "type":"multiselect",
          "required":false,
          "question":"What was your level of satisfaction working there??",
          "id":"text-28461",
          "condition":{
             "id":"select-28465",
             "value":"1"
           },
            "options": [
              {
                "value": "1",
                "label": "Not satisfied"
              },
              {
                "value": "2",
                "label": "Satisfied"
              },
              {
                "value": "3",
                "label": "Very satisfied"
              }
            ]
        },
        {
          "id":"a4211852be42dab83d22afc4f200559b",
          "type":"hierarchical",
          "required":true,
          "question":"Add new?",
          "options":[
               {
                  "value":1,
                  "label":"Si"
               },
               {
                  "value":0,
                  "label":"No"
               }
          ],
          "hierarchicalOptions":[
               {
                  "id":"6dc61bacd747dd8efe24478df7469f65",
                  "required":"true",
                  "condition":{
                     "id":"a4211852be42dab83d22afc4f200559b",
                     "value":1
                  },
                  "type":"select",
                  "options":[
                     {
                        "value":1,
                        "label":"Acquisti"
                     },
                     {
                        "value":2,
                        "label":"Altra Formazione"
                     },
                     {
                        "value":3,
                        "label":"Ambiente"
                     },
                     {
                        "value":4,
                        "label":"Amministrazione"
                     },
                     {
                        "value":5,
                        "label":"Business developement"
                     },
                     {
                        "value":6,
                        "label":"Commerciale"
                     },
                     {
                        "value":7,
                        "label":"Comunicazione e Relazioni Pubbliche"
                     },
                     {
                        "value":8,
                        "label":"Contabilit\u00e0 e bilancio"
                     },
                     {
                        "value":9,
                        "label":"Creativi"
                     },
                     {
                        "value":10,
                        "label":"Design"
                     },
                     {
                        "value":11,
                        "label":"Direzione Medica"
                     },
                     {
                        "value":12,
                        "label":"Edilizia"
                     },
                     {
                        "value":13,
                        "label":"Finanza"
                     },
                     {
                        "value":14,
                        "label":"Giornalismo\/ Redazione"
                     },
                     {
                        "value":15,
                        "label":"ICT e Sistemi informativi"
                     },
                     {
                        "value":16,
                        "label":"Informatori Scientifici del Farmaco"
                     },
                     {
                        "value":17,
                        "label":"Ingegneria"
                     },
                     {
                        "value":18,
                        "label":"Installazione\/ Manutenzione\/ Riparazione"
                     },
                     {
                        "value":19,
                        "label":"Istruzione"
                     },
                     {
                        "value":20,
                        "label":"Legale\/ Avvocati"
                     },
                     {
                        "value":21,
                        "label":"Logistica\/ Trasporti"
                     },
                     {
                        "value":22,
                        "label":"Marketing"
                     },
                     {
                        "value":23,
                        "label":"Neolaureato \/ Neodiplomato"
                     },
                     {
                        "value":24,
                        "label":"Personale Medico\/ Infermieristico"
                     },
                     {
                        "value":25,
                        "label":"Produzione\/ Operations"
                     },
                     {
                        "value":26,
                        "label":"Professioni specialistiche"
                     },
                     {
                        "value":27,
                        "label":"Progettista CAD-CAM"
                     },
                     {
                        "value":28,
                        "label":"Project Management"
                     },
                     {
                        "value":29,
                        "label":"Qualit\u00e0"
                     },
                     {
                        "value":30,
                        "label":"Reclutamento\/ Selezione"
                     },
                     {
                        "value":31,
                        "label":"Ricerca e sviluppo"
                     },
                     {
                        "value":32,
                        "label":"Risorse Umane"
                     },
                     {
                        "value":33,
                        "label":"Ristorazione\/ Ospitalit\u00e0 alberghiera"
                     },
                     {
                        "value":34,
                        "label":"Servizi di Protezione\/ Vigilanza"
                     },
                     {
                        "value":35,
                        "label":"Servizi di segreteria\/ ufficio"
                     },
                     {
                        "value":36,
                        "label":"Settore spettacolo \/ televisivo"
                     },
                     {
                        "value":37,
                        "label":"Sicurezza"
                     },
                     {
                        "value":38,
                        "label":"Strategia\/ Direzione Aziendale"
                     },
                     {
                        "value":39,
                        "label":"Supporto ai clienti"
                     },
                     {
                        "value":40,
                        "label":"Top Management"
                     },
                     {
                        "value":41,
                        "label":"Traduttori"
                     },
                     {
                        "value":42,
                        "label":"Turismo"
                     },
                     {
                        "value":43,
                        "label":"Altro"
                     }
                  ],
                  "question":"Professione\/ Funzione",
                  "name":"professione_funzione"
               },
               {
                  "id":"61d34ee2c924a1b926668734d88751ef",
                  "type":"select",
                  "question":"Add new?",
                  "options":[
                     {
                        "value":1,
                        "label":"Si"
                     },
                     {
                        "value":0,
                        "label":"No"
                     }
                  ],
                  "condition":{
                     "id":"a4211852be42dab83d22afc4f200559b",
                     "value":1
                  },
                  "name":"add_new"
               }
            ]
         },
         {
          "id": "0433c51a55239f22d751c302c890575d",
          "type": "hierarchical",
          "required": true,
          "question": "Ethnic Origin",
          "options": [
            {
              "value": "Hispanic or Latino",
              "label": "Hispanic/Latino"
            },
            {
              "value": "Not Hispanic or Latino",
              "label": "Not Hispanic/Latino"
            },
            {
              "value": "Decline",
              "label": "I decline to say"
            }
          ],
          "hierarchicalOptions": [
            {
              "name": "race",
              "required": true,
              "question": "Race",
              "type": "select",
              "condition": {
                "id": "0433c51a55239f22d751c302c890575d",
                "value": "Not Hispanic or Latino"
              },
              "options": [
                {
                  "value": "White",
                  "label": "White"
                },
                {
                  "value": "Black or African American",
                  "label": "Black or African American"
                },
                {
                  "value": "Native Hawaiian or Pacific Islander",
                  "label": "Native Hawaiian or Other Pacific Islander"
                },
                {
                  "value": "Asian",
                  "label": "Asian"
                },
                {
                  "value": "American Indian or Alaska Native",
                  "label": "American Indian or Alaska Native"
                },
                {
                  "value": "Two or More",
                  "label": "Two or More Races"
                },
                {
                  "value": "Decline",
                  "label": "I decline to say"
                }
              ],
              "id": "d6982f84f4aaef09f268fe616edbb9d9"
            }
          ]
        },
        {
          "id": "ac622a20844b57ff76299f7b3b2c7886",
          "type": "hierarchical",
          "required": true,
          "question": "Add another?",
          "options": [
            {
              "value": "No",
              "label": "No"
            },
            {
              "value": "Yes",
              "label": "Yes"
            }
          ],
          "hierarchicalOptions": [
            {
              "question": "smartDay",
              "required": true,
              "type": "select",
              "id": "9338f7a67e939d949faeb6f4146245c8",
              "name": "smart-day-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "options": [
                {
                  "value": "0",
                  "label": "Everyday"
                },
                {
                  "value": "1",
                  "label": "Weekends"
                },
                {
                  "value": "2",
                  "label": "Weekdays"
                },
                {
                  "value": "3",
                  "label": "Monday"
                },
                {
                  "value": "4",
                  "label": "Tuesday"
                },
                {
                  "value": "5",
                  "label": "Wednesday"
                },
                {
                  "value": "6",
                  "label": "Thursday"
                },
                {
                  "value": "7",
                  "label": "Friday"
                },
                {
                  "value": "8",
                  "label": "Saturday"
                },
                {
                  "value": "9",
                  "label": "Sunday"
                }
              ],
              "condition": {
                "id": "ac622a20844b57ff76299f7b3b2c7886",
                "value": "Yes"
              }
            },
            {
              "id": "073b775200071857976c02d58fc33d90",
              "name": "smart-to-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartTo",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "ac622a20844b57ff76299f7b3b2c7886",
                "value": "Yes"
              }
            },
            {
              "id": "02e36f5f06563bdd13a390e51f96b2af",
              "name": "smart-from-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartFrom",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "ac622a20844b57ff76299f7b3b2c7886",
                "value": "Yes"
              }
            },
            {
              "id": "f593cf23ef9719aaa954fa0132590470",
              "name": "smart-Addanother?-0-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "Add another?",
              "required": "1",
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "No"
                },
                {
                  "value": "1",
                  "label": "Yes"
                }
              ],
              "condition": {
                "id": "ac622a20844b57ff76299f7b3b2c7886",
                "value": "Yes"
              }
            },
            {
              "question": "smartDay",
              "required": true,
              "type": "select",
              "id": "6f34b3e01aa4baf26d74c8ffffd0c1fb",
              "name": "smart-smartDay-1-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "options": [
                {
                  "value": "0",
                  "label": "Everyday"
                },
                {
                  "value": "1",
                  "label": "Weekends"
                },
                {
                  "value": "2",
                  "label": "Weekdays"
                },
                {
                  "value": "3",
                  "label": "Monday"
                },
                {
                  "value": "4",
                  "label": "Tuesday"
                },
                {
                  "value": "5",
                  "label": "Wednesday"
                },
                {
                  "value": "6",
                  "label": "Thursday"
                },
                {
                  "value": "7",
                  "label": "Friday"
                },
                {
                  "value": "8",
                  "label": "Saturday"
                },
                {
                  "value": "9",
                  "label": "Sunday"
                }
              ],
              "condition": {
                "id": "f593cf23ef9719aaa954fa0132590470",
                "value": "Yes"
              }
            },
            {
              "id": "ed24bef522c9e2f80210b51ce0b45f78",
              "name": "smart-smartTo-1-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartTo",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "f593cf23ef9719aaa954fa0132590470",
                "value": "Yes"
              }
            },
            {
              "id": "66b71b91898b8f80837eb582d8532caf",
              "name": "smart-smartFrom-1-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartFrom",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "f593cf23ef9719aaa954fa0132590470",
                "value": "Yes"
              }
            },
            {
              "id": "0b93f7101c61fae6e1e926e23cf63007",
              "name": "smart-Addanother?-1-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "Add another?",
              "required": "1",
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "No"
                },
                {
                  "value": "1",
                  "label": "Yes"
                }
              ],
              "condition": {
                "id": "f593cf23ef9719aaa954fa0132590470",
                "value": "Yes"
              }
            },
            {
              "question": "smartDay",
              "required": true,
              "type": "select",
              "id": "824fda33c118984a9bcf427b8ce3d21c",
              "name": "smart-smartDay-2-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "options": [
                {
                  "value": "0",
                  "label": "Everyday"
                },
                {
                  "value": "1",
                  "label": "Weekends"
                },
                {
                  "value": "2",
                  "label": "Weekdays"
                },
                {
                  "value": "3",
                  "label": "Monday"
                },
                {
                  "value": "4",
                  "label": "Tuesday"
                },
                {
                  "value": "5",
                  "label": "Wednesday"
                },
                {
                  "value": "6",
                  "label": "Thursday"
                },
                {
                  "value": "7",
                  "label": "Friday"
                },
                {
                  "value": "8",
                  "label": "Saturday"
                },
                {
                  "value": "9",
                  "label": "Sunday"
                }
              ],
              "condition": {
                "id": "0b93f7101c61fae6e1e926e23cf63007",
                "value": "Yes"
              }
            },
            {
              "id": "ced94dc12e51c4b5af3433ea63716c27",
              "name": "smart-smartTo-2-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartTo",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "0b93f7101c61fae6e1e926e23cf63007",
                "value": "Yes"
              }
            },
            {
              "id": "48a1db8ac42873598cae48884c1267ba",
              "name": "smart-smartFrom-2-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartFrom",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "0b93f7101c61fae6e1e926e23cf63007",
                "value": "Yes"
              }
            },
            {
              "id": "be2cb490903d2259bb2850444d962e83",
              "name": "smart-Addanother?-2-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "Add another?",
              "required": "1",
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "No"
                },
                {
                  "value": "1",
                  "label": "Yes"
                }
              ],
              "condition": {
                "id": "0b93f7101c61fae6e1e926e23cf63007",
                "value": "Yes"
              }
            },
            {
              "question": "smartDay",
              "required": true,
              "type": "select",
              "id": "cc40a911392ed03520649223c55d658e",
              "name": "smart-smartDay-3-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "options": [
                {
                  "value": "0",
                  "label": "Everyday"
                },
                {
                  "value": "1",
                  "label": "Weekends"
                },
                {
                  "value": "2",
                  "label": "Weekdays"
                },
                {
                  "value": "3",
                  "label": "Monday"
                },
                {
                  "value": "4",
                  "label": "Tuesday"
                },
                {
                  "value": "5",
                  "label": "Wednesday"
                },
                {
                  "value": "6",
                  "label": "Thursday"
                },
                {
                  "value": "7",
                  "label": "Friday"
                },
                {
                  "value": "8",
                  "label": "Saturday"
                },
                {
                  "value": "9",
                  "label": "Sunday"
                }
              ],
              "condition": {
                "id": "be2cb490903d2259bb2850444d962e83",
                "value": "Yes"
              }
            },
            {
              "id": "95585be41ef05a87a89b67d4ab1407bf",
              "name": "smart-smartTo-3-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartTo",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "be2cb490903d2259bb2850444d962e83",
                "value": "Yes"
              }
            },
            {
              "id": "c09367c12296e774b716061d9e200a5e",
              "name": "smart-smartFrom-3-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartFrom",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "be2cb490903d2259bb2850444d962e83",
                "value": "Yes"
              }
            },
            {
              "id": "4fc9fa7dfb078a6d6f3c2c50a8624ad1",
              "name": "smart-Addanother?-3-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "Add another?",
              "required": "1",
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "No"
                },
                {
                  "value": "1",
                  "label": "Yes"
                }
              ],
              "condition": {
                "id": "be2cb490903d2259bb2850444d962e83",
                "value": "Yes"
              }
            },
            {
              "question": "smartDay",
              "required": true,
              "type": "select",
              "id": "60fa953a853fa82e9b31ef6e1dc39e4e",
              "name": "smart-smartDay-4-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "options": [
                {
                  "value": "0",
                  "label": "Everyday"
                },
                {
                  "value": "1",
                  "label": "Weekends"
                },
                {
                  "value": "2",
                  "label": "Weekdays"
                },
                {
                  "value": "3",
                  "label": "Monday"
                },
                {
                  "value": "4",
                  "label": "Tuesday"
                },
                {
                  "value": "5",
                  "label": "Wednesday"
                },
                {
                  "value": "6",
                  "label": "Thursday"
                },
                {
                  "value": "7",
                  "label": "Friday"
                },
                {
                  "value": "8",
                  "label": "Saturday"
                },
                {
                  "value": "9",
                  "label": "Sunday"
                }
              ],
              "condition": {
                "id": "4fc9fa7dfb078a6d6f3c2c50a8624ad1",
                "value": "Yes"
              }
            },
            {
              "id": "902e4ba827405f8d513b85cea53630f4",
              "name": "smart-smartTo-4-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartTo",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "4fc9fa7dfb078a6d6f3c2c50a8624ad1",
                "value": "Yes"
              }
            },
            {
              "id": "7c69a837ae3ad933e78eaf3fd08c093d",
              "name": "smart-smartFrom-4-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartFrom",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "4fc9fa7dfb078a6d6f3c2c50a8624ad1",
                "value": "Yes"
              }
            },
            {
              "id": "9f5b2bc20607286ad4d5f0bf8641039b",
              "name": "smart-Addanother?-4-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "Add another?",
              "required": "1",
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "No"
                },
                {
                  "value": "1",
                  "label": "Yes"
                }
              ],
              "condition": {
                "id": "4fc9fa7dfb078a6d6f3c2c50a8624ad1",
                "value": "Yes"
              }
            },
            {
              "question": "smartDay",
              "required": true,
              "type": "select",
              "id": "bdc229b312d5f9f1418d27015bcd7edf",
              "name": "smart-smartDay-5-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "options": [
                {
                  "value": "0",
                  "label": "Everyday"
                },
                {
                  "value": "1",
                  "label": "Weekends"
                },
                {
                  "value": "2",
                  "label": "Weekdays"
                },
                {
                  "value": "3",
                  "label": "Monday"
                },
                {
                  "value": "4",
                  "label": "Tuesday"
                },
                {
                  "value": "5",
                  "label": "Wednesday"
                },
                {
                  "value": "6",
                  "label": "Thursday"
                },
                {
                  "value": "7",
                  "label": "Friday"
                },
                {
                  "value": "8",
                  "label": "Saturday"
                },
                {
                  "value": "9",
                  "label": "Sunday"
                }
              ],
              "condition": {
                "id": "9f5b2bc20607286ad4d5f0bf8641039b",
                "value": "Yes"
              }
            },
            {
              "id": "91f3fd4731c0ff09007a2d3008b2b2ff",
              "name": "smart-smartTo-5-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartTo",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "9f5b2bc20607286ad4d5f0bf8641039b",
                "value": "Yes"
              }
            },
            {
              "id": "ee481a44aa01ef97c1cbcd3b662b1106",
              "name": "smart-smartFrom-5-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartFrom",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "9f5b2bc20607286ad4d5f0bf8641039b",
                "value": "Yes"
              }
            },
            {
              "id": "15ede1b398b9c8fe70ed3896e902fb47",
              "name": "smart-Addanother?-5-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "Add another?",
              "required": "1",
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "No"
                },
                {
                  "value": "1",
                  "label": "Yes"
                }
              ],
              "condition": {
                "id": "9f5b2bc20607286ad4d5f0bf8641039b",
                "value": "Yes"
              }
            },
            {
              "question": "smartDay",
              "required": true,
              "type": "select",
              "id": "e3f8eed470df747b9baa329c85b27d13",
              "name": "smart-smartDay-6-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "options": [
                {
                  "value": "0",
                  "label": "Everyday"
                },
                {
                  "value": "1",
                  "label": "Weekends"
                },
                {
                  "value": "2",
                  "label": "Weekdays"
                },
                {
                  "value": "3",
                  "label": "Monday"
                },
                {
                  "value": "4",
                  "label": "Tuesday"
                },
                {
                  "value": "5",
                  "label": "Wednesday"
                },
                {
                  "value": "6",
                  "label": "Thursday"
                },
                {
                  "value": "7",
                  "label": "Friday"
                },
                {
                  "value": "8",
                  "label": "Saturday"
                },
                {
                  "value": "9",
                  "label": "Sunday"
                }
              ],
              "condition": {
                "id": "15ede1b398b9c8fe70ed3896e902fb47",
                "value": "Yes"
              }
            },
            {
              "id": "f79a2806d7120237d106c2f98b64cd9e",
              "name": "smart-smartTo-6-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartTo",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "15ede1b398b9c8fe70ed3896e902fb47",
                "value": "Yes"
              }
            },
            {
              "id": "251e918cb8eaf0ed9373bb882d35d887",
              "name": "smart-smartFrom-6-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartFrom",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "15ede1b398b9c8fe70ed3896e902fb47",
                "value": "Yes"
              }
            },
            {
              "id": "d408497e7c055b9209984356c03f923f",
              "name": "smart-Addanother?-6-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "Add another?",
              "required": "1",
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "No"
                },
                {
                  "value": "1",
                  "label": "Yes"
                }
              ],
              "condition": {
                "id": "15ede1b398b9c8fe70ed3896e902fb47",
                "value": "Yes"
              }
            },
            {
              "question": "smartDay",
              "required": true,
              "type": "select",
              "id": "fce21fa272ff150039d35e57e4082822",
              "name": "smart-smartDay-7-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "options": [
                {
                  "value": "0",
                  "label": "Everyday"
                },
                {
                  "value": "1",
                  "label": "Weekends"
                },
                {
                  "value": "2",
                  "label": "Weekdays"
                },
                {
                  "value": "3",
                  "label": "Monday"
                },
                {
                  "value": "4",
                  "label": "Tuesday"
                },
                {
                  "value": "5",
                  "label": "Wednesday"
                },
                {
                  "value": "6",
                  "label": "Thursday"
                },
                {
                  "value": "7",
                  "label": "Friday"
                },
                {
                  "value": "8",
                  "label": "Saturday"
                },
                {
                  "value": "9",
                  "label": "Sunday"
                }
              ],
              "condition": {
                "id": "d408497e7c055b9209984356c03f923f",
                "value": "Yes"
              }
            },
            {
              "id": "867fad00e74a7ea4ae29a298c7b1bafc",
              "name": "smart-smartTo-7-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartTo",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "d408497e7c055b9209984356c03f923f",
                "value": "Yes"
              }
            },
            {
              "id": "87e4b400c349cc9fc05b7bd870f87412",
              "name": "smart-smartFrom-7-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "smartFrom",
              "required": true,
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "00:00 AM"
                },
                {
                  "value": "1",
                  "label": "01:00 AM"
                },
                {
                  "value": "2",
                  "label": "02:00 AM"
                },
                {
                  "value": "3",
                  "label": "03:00 AM"
                },
                {
                  "value": "4",
                  "label": "04:00 AM"
                },
                {
                  "value": "5",
                  "label": "05:00 AM"
                },
                {
                  "value": "6",
                  "label": "06:00 AM"
                },
                {
                  "value": "7",
                  "label": "07:00 AM"
                },
                {
                  "value": "8",
                  "label": "08:00 AM"
                },
                {
                  "value": "9",
                  "label": "09:00 AM"
                },
                {
                  "value": "10",
                  "label": "10:00 AM"
                },
                {
                  "value": "11",
                  "label": "11:00 AM"
                },
                {
                  "value": "12",
                  "label": "12:00 AM"
                },
                {
                  "value": "13",
                  "label": "01:00 PM"
                },
                {
                  "value": "14",
                  "label": "02:00 PM"
                },
                {
                  "value": "15",
                  "label": "03:00 PM"
                },
                {
                  "value": "16",
                  "label": "04:00 PM"
                },
                {
                  "value": "17",
                  "label": "05:00 PM"
                },
                {
                  "value": "18",
                  "label": "06:00 PM"
                },
                {
                  "value": "19",
                  "label": "07:00 PM"
                },
                {
                  "value": "20",
                  "label": "08:00 PM"
                },
                {
                  "value": "21",
                  "label": "09:00 PM"
                },
                {
                  "value": "22",
                  "label": "10:00 PM"
                },
                {
                  "value": "23",
                  "label": "11:00 PM"
                }
              ],
              "condition": {
                "id": "d408497e7c055b9209984356c03f923f",
                "value": "Yes"
              }
            },
            {
              "id": "a65116e5d604f7c2c9fa4d7fcf7c79fd",
              "name": "smart-Addanother?-7-655433e0-422a-4b9d-b28a-8a8b33452d04",
              "question": "Add another?",
              "required": "1",
              "type": "select",
              "options": [
                {
                  "value": "0",
                  "label": "No"
                },
                {
                  "value": "1",
                  "label": "Yes"
                }
              ],
              "condition": {
                "id": "d408497e7c055b9209984356c03f923f",
                "value": "Yes"
              }
            }
          ]
        },
        {
          "required": true,
          "type": "client_tos",
          "link": "https://9gag.com/",
          "id": "privacy_policy"
        }
        ]';

print_r($json);

