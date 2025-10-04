# Paint Color Picker - ACF Setup Instructions

## Overview
The Paint Color Picker page now uses Advanced Custom Fields (ACF) to manage colors from the WordPress admin panel. This allows you to easily add, edit, and remove colors without touching any code.

## How to Access

1. Log into WordPress admin dashboard
2. In the left sidebar, you'll see a new menu item called **"Paint Colors"** with a paint brush icon
3. Click on it to manage your color collection

## How to Add Colors

### Step 1: Navigate to Paint Colors Settings
- Go to **Paint Colors** in the WordPress admin menu

### Step 2: Add a New Color
Click the **"Add Color"** button at the bottom of the repeater field

### Step 3: Fill in Color Information

#### Required Fields:
1. **Color Name** - The display name of the color (e.g., "Real Red", "Ocean Blue")
2. **Color Code** - The manufacturer's color code (e.g., "SW 6868", "BM 2023")
3. **Hex Color** - Click the color picker to select the exact color
4. **Color Family** - Select from dropdown:
   - Reds
   - Oranges
   - Yellows
   - Greens
   - Blues
   - Purples
   - Neutrals
   - Whites
   - Blacks

#### Optional Fields:
5. **RGB Values** - Enter RGB values separated by commas (e.g., "200, 16, 46")
6. **LRV** - Light Reflectance Value (0-100)

### Step 4: Save
Click the **"Update"** button at the bottom of the page to save your changes

## Managing Colors

### Edit a Color
1. Click on any row in the color table
2. Modify the fields
3. Click "Update" to save

### Delete a Color
1. Hover over the row you want to delete
2. Click the **"-"** (minus) icon on the right side
3. Click "Update" to save changes

### Reorder Colors
1. Click and hold the "≡" icon on the left of any row
2. Drag the row up or down to reorder
3. Click "Update" to save the new order

## Color Families for Filtering

Colors are grouped into families for the filter buttons on the Paint Color Picker page:

- **Reds** - Red, burgundy, crimson colors
- **Oranges** - Orange, coral, terracotta colors
- **Yellows** - Yellow, gold, amber colors
- **Greens** - Green, olive, sage colors
- **Blues** - Blue, navy, teal colors
- **Purples** - Purple, violet, mauve colors
- **Neutrals** - Beige, taupe, greige colors
- **Whites** - White, cream, ivory colors
- **Blacks** - Black, charcoal, dark gray colors

## Tips

### RGB Values Format
- Enter RGB values as: `R, G, B`
- Example: `200, 16, 46` for a red color
- The values should be between 0-255

### Hex Color Picker
- The hex color picker allows you to choose the exact color visually
- You can also paste a hex code directly (e.g., #C8102E)
- The color swatch will update immediately

### LRV (Light Reflectance Value)
- LRV measures how much light a color reflects
- Range: 0 (pure black) to 100 (pure white)
- Higher values = lighter colors
- Lower values = darker colors

## Where Colors Appear

Colors added through ACF will automatically appear on:
1. **Paint Color Picker Page** - Main color wall display
2. **Color Family Filters** - Filter buttons at the top
3. **Color Detail Modal** - When users click on a color swatch

## Troubleshooting

### Colors Not Showing Up?
1. Make sure you clicked "Update" after adding colors
2. Refresh the Paint Color Picker page
3. Check that all required fields are filled in

### Color Not in Correct Family?
1. Edit the color
2. Check the "Color Family" dropdown selection
3. Update and refresh

### Color Picker Not Working?
1. Make sure ACF plugin is activated
2. Check that you have the latest version of ACF installed

## Example Color Entry

```
Color Name: Real Red
Color Code: SW 6868
Hex Color: #C8102E
Color Family: Reds
RGB Values: 200, 16, 46
LRV: 12
```

## Additional Notes

- You can add unlimited colors
- Colors are displayed in the order you arrange them
- The color family filter counts are automatic
- All changes are saved to the WordPress database
- No coding knowledge required!

---

For technical support or questions, contact your developer.
