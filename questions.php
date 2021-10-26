<?php
$json =
'[
    {
        "name": "phone",
        "question": "Phone",
        "type": "text",
        "required": "true"
    },
    {
        "name": "address-street",
        "question": "Street",
        "required": true,
        "maxLength": 40,
        "type": "text"
    },
    {
        "name": "address-street2",
        "question": "Street 2",
        "required": false,
        "maxLength": 25,
        "type": "text"
    },
    {
        "name": "address-city",
        "question": "City",
        "required": true,
        "maxLength": 25,
        "type": "text"
    },
    {
        "name": "address-countryState",
        "question": "Country\/State",
        "required": true,
        "hierarchicalOptions": [
            {
                "id": "countryState_US",
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
            }
        ],
        "type": "hierarchical",
        "options": [
            {
                "value": "US",
                "label": "United States"
            },
            {
                "value": "CA",
                "label": "Canada"
            }
        ]
    },
    {
        "name": "address-zip",
        "question": "Zip\/Postal Code",
        "required": true,
        "maxLength": 6,
        "type": "text"
    },
    {
        "name": "select-28446",
        "question": "If hired, can you show proof of your legal rights to work in the United States?",
        "required": true,
        "type": "select",
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
        "name": "select-28447",
        "question": "Are you 18 years of age or older?",
        "required": true,
        "type": "select",
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
        "name": "select-28448",
        "question": "Availability Monday?",
        "required": true,
        "type": "select",
        "options": [
            {
                "value": "1",
                "label": "AM"
            },
            {
                "value": "2",
                "label": "PM"
            },
            {
                "value": "3",
                "label": "All Day"
            },
            {
                "value": "4",
                "label": "Not Available"
            }
        ]
    },
    {
        "name": "select-28449",
        "question": "Availability Tuesday?",
        "required": true,
        "type": "select",
        "options": [
            {
                "value": "1",
                "label": "AM"
            },
            {
                "value": "2",
                "label": "PM"
            },
            {
                "value": "3",
                "label": "All Day"
            },
            {
                "value": "4",
                "label": "Not Available"
            }
        ]
    },
    {
        "name": "select-28450",
        "question": "Availability Wednesday?",
        "required": true,
        "type": "select",
        "options": [
            {
                "value": "1",
                "label": "AM"
            },
            {
                "value": "2",
                "label": "PM"
            },
            {
                "value": "3",
                "label": "All Day"
            },
            {
                "value": "4",
                "label": "Not Available"
            }
        ]
    },
    {
        "name": "select-28451",
        "question": "Availability Thursday?",
        "required": true,
        "type": "select",
        "options": [
            {
                "value": "1",
                "label": "AM"
            },
            {
                "value": "2",
                "label": "PM"
            },
            {
                "value": "3",
                "label": "All Day"
            },
            {
                "value": "4",
                "label": "Not Available"
            }
        ]
    },
    {
        "name": "select-28452",
        "question": "Availability Friday?",
        "required": true,
        "type": "select",
        "options": [
            {
                "value": "1",
                "label": "AM"
            },
            {
                "value": "2",
                "label": "PM"
            },
            {
                "value": "3",
                "label": "All Day"
            },
            {
                "value": "4",
                "label": "Not Available"
            }
        ]
    },
    {
        "name": "select-28453",
        "question": "Availability Saturday?",
        "required": true,
        "type": "select",
        "options": [
            {
                "value": "1",
                "label": "AM"
            },
            {
                "value": "2",
                "label": "PM"
            },
            {
                "value": "3",
                "label": "All Day"
            },
            {
                "value": "4",
                "label": "Not Available"
            }
        ]
    },
    {
        "name": "select-28454",
        "question": "Availability Sunday?",
        "required": true,
        "type": "select",
        "options": [
            {
                "value": "1",
                "label": "AM"
            },
            {
                "value": "2",
                "label": "PM"
            },
            {
                "value": "3",
                "label": "All Day"
            },
            {
                "value": "4",
                "label": "Not Available"
            }
        ]
    },
    {
        "name": "select-28464",
        "question": "Were you referred by a current Pizza Hut\/Hut American Group team member?",
        "required": true,
        "type": "select",
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
        "name": "text-28459",
        "question": "If yes, please provide the first and last name of the current team member that referred you:",
        "required": true,
        "type": "textarea"
    },
    {
        "name": "select-28465",
        "question": "Have you ever worked for Pizza Hut?",
        "required": true,
        "type": "select",
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
        "name": "text-28461",
        "question": "If Yes, When and Where?",
        "required": true,
        "type": "textarea"
    }
]';

print_r($json);
