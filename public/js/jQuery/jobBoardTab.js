const tabElements = [
    {
        id: 'overview',
        triggerEl: document.querySelector('#overview-tab'),
        targetEl: document.querySelector('#overview')
    },
    {
        id: 'task',
        triggerEl: document.querySelector('#task-tab'),
        targetEl: document.querySelector('#task')
    },
    {
        id: 'talent',
        triggerEl: document.querySelector('#talent-tab'),
        targetEl: document.querySelector('#talent')
    },
    {
        id: 'documents',
        triggerEl: document.querySelector('#documents-tab'),
        targetEl: document.querySelector('#documents')
    },
    {
        id: 'activities',
        triggerEl: document.querySelector('#activities-tab'),
        targetEl: document.querySelector('#activities')
    }
];

  // options with default values
  const options = {
      defaultTabId: 'profile-tab',
      activeClasses: 'text-palet border-palet dark:border-blue-500',
      inactiveClasses: 'text-gray-500 hover:text-palet dark:text-gray-400 border-gray-100 hover:border-palet dark:border-gray-700 dark:hover:text-gray-300',
      onShow: (e) => {
          const tab = document.querySelector('#'+e._activeTab.id);
  
      }
      
  }
  const tabs = new Tabs(tabElements, options);
