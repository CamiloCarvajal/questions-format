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
            "id":"text-28461",
            "condition":{
               "id":"select-28465",
               "value":"1"
            }
         },
         {
          "type":"text",
          "required":true,
          "question":"If Yes, What is the name of the employer?",
          "id":"text-28461",
          "condition":{
             "id":"select-28465",
             "value":"1"
           }
        },
         {
          "type":"textarea",
          "required":true,
          "question":"If Yes, What is the name of the employer?",
          "id":"text-28461",
          "condition":{
             "id":"select-28465",
             "value":"1"
           }
        },
        {
          "type":"multiselect",
          "required":false,
          "question":"If Yes, What was your level of satisfaction working there??",
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
            "required": true,
            "type": "client_tos",
            "link": "https://9gag.com/",
            "question":"I have read the Privacy Policy and confirm that Client store my personal details to be able to process my job application.",
            "id": "privacy_policy"
          }
        ]';

print_r($json);

