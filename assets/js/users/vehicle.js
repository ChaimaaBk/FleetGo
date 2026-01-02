// Gestion des modals
class ModalManager {
    constructor() {
        this.init();
    }

    init() {
        // Modal Signaler un Problème
        this.reportModal = document.getElementById('reportModal');
        this.reportBtn = document.getElementById('reportIssueBtn');
        this.closeReportModal = document.getElementById('closeReportModal');
        this.cancelReport = document.getElementById('cancelReport');
        this.reportForm = document.getElementById('reportForm');

        // Modal Historique
        this.historyModal = document.getElementById('historyModal');
        this.historyBtn = document.getElementById('historyBtn');
        this.closeHistoryModal = document.getElementById('closeHistoryModal');

        this.attachEventListeners();
    }

    attachEventListeners() {
        // Ouvrir modal signalement
        this.reportBtn.addEventListener('click', () => {
            this.openModal(this.reportModal);
        });

        // Fermer modal signalement
        this.closeReportModal.addEventListener('click', () => {
            this.closeModal(this.reportModal);
        });

        this.cancelReport.addEventListener('click', () => {
            this.closeModal(this.reportModal);
        });

        // Ouvrir modal historique
        this.historyBtn.addEventListener('click', () => {
            this.openModal(this.historyModal);
        });

        // Fermer modal historique
        this.closeHistoryModal.addEventListener('click', () => {
            this.closeModal(this.historyModal);
        });

        // Fermer sur clic en dehors du modal
        window.addEventListener('click', (e) => {
            if (e.target === this.reportModal) {
                this.closeModal(this.reportModal);
            }
            if (e.target === this.historyModal) {
                this.closeModal(this.historyModal);
            }
        });

        // Fermer sur touche Échap
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                this.closeModal(this.reportModal);
                this.closeModal(this.historyModal);
            }
        });

        // Soumettre le formulaire
        this.reportForm.addEventListener('submit', (e) => {
            e.preventDefault();
            this.handleReportSubmit();
        });
    }

    openModal(modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    closeModal(modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
        
        // Réinitialiser le formulaire si c'est le modal de signalement
        if (modal === this.reportModal) {
            this.reportForm.reset();
        }
    }

    handleReportSubmit() {
        const formData = {
            type: document.getElementById('issueType').value,
            description: document.getElementById('issueDescription').value,
            severity: document.getElementById('issueSeverity').value,
            timestamp: new Date().toISOString(),
            vehicle: 'ABC-1234'
        };

        console.log('Rapport soumis:', formData);

        // Show success notification
        this.showNotification('Issue reported successfully!', 'success');

        // Close modal
        this.closeModal(this.reportModal);

        // Here you can add an API call to send data to server
        // Example: fetch('/api/report-issue', { method: 'POST', body: JSON.stringify(formData) })
    }

    showNotification(message, type = 'info') {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${type === 'success' ? '#10b981' : '#3b82f6'};
            color: white;
            padding: 16px 24px;
            border-radius: 8px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            animation: slideIn 0.3s ease-out;
            font-weight: 600;
        `;
        notification.textContent = message;

        // Add CSS animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideIn {
                from {
                    transform: translateX(400px);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
            @keyframes slideOut {
                from {
                    transform: translateX(0);
                    opacity: 1;
                }
                to {
                    transform: translateX(400px);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        document.body.appendChild(notification);

        // Remove after 3 seconds
        setTimeout(() => {
            notification.style.animation = 'slideOut 0.3s ease-out';
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 3000);
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', () => {
    new ModalManager();

    // Add hover animations to cards
    const cards = document.querySelectorAll('.stat-card, .document-item, .action-button');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.transition = 'transform 0.2s ease';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    // Simulate document downloads
    const downloadButtons = document.querySelectorAll('.icon-button-small');
    downloadButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const documentName = this.closest('.document-item')
                .querySelector('.document-name').textContent;
            
            console.log('Downloading document:', documentName);
            
            // Show notification
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                bottom: 20px;
                right: 20px;
                background: #3b82f6;
                color: white;
                padding: 16px 24px;
                border-radius: 8px;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                z-index: 9999;
                font-weight: 600;
            `;
            notification.textContent = `Downloading ${documentName}...`;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 2000);
        });
    });

    // Quick actions
    const actionButtons = document.querySelectorAll('.action-button');
    actionButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const actionText = this.querySelector('span:last-child').textContent;
            console.log('Action triggered:', actionText);
            
            // Show notification
            const notification = document.createElement('div');
            notification.style.cssText = `
                position: fixed;
                bottom: 20px;
                right: 20px;
                background: #10b981;
                color: white;
                padding: 16px 24px;
                border-radius: 8px;
                box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
                z-index: 9999;
                font-weight: 600;
            `;
            notification.textContent = `${actionText} initiated...`;
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.remove();
            }, 2000);
        });
    });

    // Fuel level progress bar animation
    const progressBar = document.querySelector('.progress-fill');
    if (progressBar) {
        progressBar.style.width = '0%';
        setTimeout(() => {
            progressBar.style.transition = 'width 1s ease-out';
            progressBar.style.width = '75%';
        }, 100);
    }

    console.log('FleetGo - Application initialized successfully');
});