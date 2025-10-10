# Technical Data Sheets Instructions

## Overview
The Technical Data Sheets page uses ACF (Advanced Custom Fields) to manage documents that can be displayed in a searchable, sortable, and paginated table.

## How to Add Data Sheets

1. **Access the Admin Panel**
   - Go to WordPress Admin Dashboard
   - Look for "Data Sheets" in the left sidebar menu (icon: document)

2. **Add New Data Sheets**
   - Click on "Data Sheets"
   - Click "Add Data Sheet" button
   - Fill in the following fields:
     - **Document Name**: The name/title of the technical sheet (e.g., "Fiddes Hard Wax Oil")
     - **Document URL**: The full URL to the PDF or document file

3. **Save Changes**
   - Click "Update" or "Publish" to save your changes
   - The data sheets will immediately appear on the Technical Sheets page

## Features

### Search
- Type in the search box to filter data sheets by document name
- Search is case-insensitive and searches within document names
- Results update after 500ms of typing (debounced)

### Sorting
- Click on column headers to sort:
  - **#**: Sort by ID number
  - **Document Name**: Sort alphabetically by name
- Click again to toggle between ascending/descending order

### Pagination
- Choose how many entries to show per page (10, 25, 50, 100)
- Navigate between pages using Previous/Next or page numbers
- Shows up to 5 page numbers at a time

### AJAX Updates
- All interactions (search, sort, pagination) happen without page reload
- Smooth opacity transitions during updates
- URL updates for shareable/bookmarkable states

## ACF Field Structure

```
Data Sheets (Repeater)
├── Document Name (Text) - Required
└── Document URL (URL) - Required
```

## Tips

- Keep document names clear and descriptive
- Use HTTPS URLs for better security
- Host PDFs on reliable servers or in WordPress Media Library
- Regular naming conventions help users find documents faster
- The ID number is auto-generated based on the order in ACF

## Troubleshooting

**No data sheets showing?**
- Make sure you've added at least one data sheet in the ACF options page
- Check that both Document Name and Document URL are filled

**Search not working?**
- Open browser console (F12) to see debug messages
- Check that JavaScript is enabled

**Pagination not working?**
- Check browser console for AJAX errors
- Ensure jQuery is loaded properly
