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
                "question": "State US",
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
                "question": "State Ca",
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
                "question": "City Ca",
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
                "question": "Adress Ca",
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
            "question": "If hired, can you show proof of your legal rights to work in the United States?",
            "id": "select-28446",
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
            "type": "select",
            "required": true,
            "question": "Are you 18 years of age or older?",
            "id": "select-28447",
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
            "type": "select",
            "required": true,
            "question": "Were you referred by a current Pizza Hut/Hut American Group team member?",
            "id": "select-28464",
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
            "type": "multiselect",
            "required": true,
            "question": "What is your favorite hobbies?",
            "id": "select-28464",
            "options": [
              {
                "value": "1",
                "label": "Exercises, Jogging"
              },
              {
                "value": "2",
                "label": "Video Games"
              },
              {
                "value": "3",
                "label": "Reading"
              }
            ]
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
            "required": true,
            "type": "client_tos",
            "link": "https://9gag.com/",
            "id": "privacy_policy"
          }
        ]';

print_r($json);

