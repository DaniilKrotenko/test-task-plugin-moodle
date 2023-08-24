### Task 1 (file index.php)
# Keyword Search Webpage

## Overview

This is a simple static webpage that allows users to search for specific keywords in a block of text. It extracts keywords from a list and searches for each of them in the provided text. The results indicate whether each keyword was found or not found in the text.

### Features

- Two input boxes: one for entering full text and another for a list of keywords.
- Clicking the "Search" button triggers the keyword search.
- Keywords are identified as strings starting with "mod_".
- The results are displayed as keyword (module) names and whether they were FOUND or NOT FOUND.

## Usage

1. Open the webpage in a web browser.

2. In the "Full Text" input box, paste the text in which you want to search for keywords. Keywords should be formatted as `mod_keyword` (e.g., `mod_collaborate`).

3. In the "Keywords List" input box, paste the list of keywords you want to search for, separating them with commas and spaces (e.g., `test, mod_collaborate test`).

4. Click the "Search" button to initiate the search.

5. The results will be displayed below the button, indicating which keywords were found and which were not found in the provided text.

## Example

**Full Text Input:**

Lorem ipsum dolor sit mod_collaborate amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. mod_livepoll Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit mod_hsuforum esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.


**Keywords List Input:**

test, mod_collaborate test
abc, mod_livepoll_extended , ipsum dolor
xyz, mod_hsu, ipsum dolor


**Result:**

mod_collaborate, FOUND
mod_livepoll_extended, NOT FOUND
mod_hsu, NOT FOUND


### Task 2 (folder customreportplugin)
# Custom Report Plugin for Moodle

## Overview

The Custom Report plugin is designed for Moodle administrators to generate a report that displays a table of ten random users and the courses they are enrolled in. This report is intended for administrative use only.

## Installation

To install and test this plugin, follow the steps below:

Copy the customreport folder (including all files and subdirectories) to the moodle/report/ directory on the Moodle server.
Log in to the Moodle administrative interface.
Go to "Site administration" -> "Notifications". Moodle will automatically install and activate your plugin.
Go to the report page at http://yourmoodlesite.com/report/customreport/index.php (replace yourmoodlesite.com with your Moodle site address). You should see a table with ten random users and the courses they are enrolled in.

For any questions or issues related to this plugin, please contact the Moodle administrator.

## License

This plugin is released under the [GNU General Public License](LICENSE).
