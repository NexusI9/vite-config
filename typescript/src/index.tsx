import { createRoot } from 'react-dom/client';
import App from './App';

import { Provider } from 'react-redux';
import store from '@lib/store';

document.addEventListener('DOMContentLoaded', function () {
  const container = document.getElementById('stylee-app');
  const root = container && createRoot(container);
  root?.render(
    <Provider store={store}>
      <App />
    </Provider>
  );
});