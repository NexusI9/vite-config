# Web Bundler config preset
A simple repo gathering various Webpack or viteJS preconfigurated projects depending on the need.

## Configurations

### Default
For simple and short projects

**Details**
- Languages: 
    - JS
    - SCSS
- Bundle Type:
Will bundle all the assets within a "assets" directory


### Three
Similar to Default but include GLSL import handling
**Details**
- Languages: 
    - JS
    - SCSS
    - GLSL
- Bundle Type:
Will bundle all the assets within a "assets" directory and put Three module in distrinct directory

### Typescript
For more complex projects that require extensive structures

**Details**
- Languages:
    - JS
    - TS
    - TSX
    - JSX
    - SCSS
- Bundle Type: Will bundle all the assets within a "assets" directory
- Will import SVG as JSX components


### Static Copy
For projects that require to maintain the same structure as the src/ directory

- Languages:
    - JS
    - SCSS
- Bundle Type: Will bundle all the assets within a "assets" directory

## How to use

1. Clone on of the config directory
2. run "npm install"
3. run "npm run dev" or "npm run watch" depending on the configuration chosen